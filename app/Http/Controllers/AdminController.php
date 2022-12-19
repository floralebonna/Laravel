<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function indexC()
    {
        $data = DB::select('select * from informasi_pemesanans JOIN
        users ON informasi_pemesanans.idPelanggan = users.id JOIN
        orderans ON informasi_pemesanans.idBooking = orderans.id');

        return view('confirmation', [
            'data' => $data
        ]);
    }
    public function indexR()
    {
        $data = DB::select('select * from informasi_pemesanans JOIN
        users ON informasi_pemesanans.idPelanggan = users.id JOIN
        orderans ON informasi_pemesanans.idBooking = orderans.id');
        $total = DB::select('select SUM(Price) as sum from informasi_pemesanans');

        return view('recapitulation', [
            'data' => $data,
            'total' => $total
        ]);
    }
    public function viewTable(Request $request)
    {
        $data = DB::select("select * from informasi_pemesanans JOIN
        users ON informasi_pemesanans.idPelanggan = users.id JOIN
        orderans ON informasi_pemesanans.idBooking = orderans.id
        where DATE(informasi_pemesanans.created_at) between '$request->tglawal' and '$request->tglakhir' order by informasi_pemesanans.id");
        $total = DB::select("select SUM(Price) as sum from informasi_pemesanans
        where DATE(informasi_pemesanans.created_at) between '$request->tglawal' and '$request->tglakhir' group by YEAR(informasi_pemesanans.created_at) order by informasi_pemesanans.id");

        return view('recapitulation', [
            'data' => $data,
            'total' => $total
        ]);
    }
    public function destroy($id)
    {
        $data = DB::table('informasi_pemesanans')->where('idBooking', '=', $id);
        $data->delete();
        return redirect('/konfirmasi');
    }
    public function print()
    {
        $data = DB::select('select * from informasi_pemesanans JOIN
        users ON informasi_pemesanans.idPelanggan = users.id JOIN
        orderans ON informasi_pemesanans.idBooking = orderans.id');
        $total = DB::select('select SUM(Price) as sum from informasi_pemesanans');

        return view('print', [
            'data' => $data,
            'total' => $total
        ]);
    }
    public function pay($id)
    {
        $data = DB::select('select * from informasi_pemesanans JOIN
        users ON informasi_pemesanans.idPelanggan = users.id JOIN
        orderans ON informasi_pemesanans.idBooking = orderans.id
        where idBooking = ?', [$id]);

        return view('yourOrderPay', [
            'data' => $data,
            'id' => $id
        ]);
    }
    public function lunas($id)
    {
        $data = DB::select('select * from informasi_pemesanans JOIN
        users ON informasi_pemesanans.idPelanggan = users.id JOIN
        orderans ON informasi_pemesanans.idBooking = orderans.id
        where idBooking = ?', [$id]);

        return view('yourOrderLunas', [
            'data' => $data,
            'id' => $id
        ]);
    }
}

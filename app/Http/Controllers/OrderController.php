<?php

namespace App\Http\Controllers;

use App\Models\InformasiPemesanan;
use App\Models\orderan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function formOrder()
    {
        $arrayjam = ['Select Time', '08.00-10.00','09.00-11.00','10.00-12.00','11.00-13.00','12.00-14.00','13.00-15.00','14.00-16.00','15.00-17.00'];
        return view('formOrder', [
            'jam'=>$arrayjam
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Phone_number' => 'required',
            'Address' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);
        $date = substr($validatedData['date'], 0, 10);
        DB::insert('insert into orderans (date, time) values (?, ?)', [$date, $validatedData['time']]);
        $idBooking = DB::select("SHOW TABLE STATUS LIKE 'orderans'");
        $idB = $idBooking[0];

        $idPelangan = auth()->user()->id;
        DB::insert('insert into informasi_pemesanans (idPelanggan, idBooking, Name, Phone_number, Address) values (?, ?, ?, ?, ?)', [$idPelangan, $idB, $validatedData['Name'], $validatedData['Phone_number'], $validatedData['Address']]);

        return redirect('/dashboard');
    }

    public function ViewOrder()
    {
        $id = auth()->user()->id;
        $data = DB::select('select * from informasi_pemesanans where idBooking = ?', [$id]);

        return view('orderan', [
            'data' => $data
        ]);
    }
}

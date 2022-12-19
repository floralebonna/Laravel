<?php

namespace App\Http\Controllers;

use App\Models\InformasiPemesanan;
use App\Http\Requests\StoreInformasiPemesananRequest;
use App\Http\Requests\UpdateInformasiPemesananRequest;
use Illuminate\Support\Facades\DB;

class InformasiPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::select('select * from informasi_pemesanans JOIN
        // users ON informasi_pemesanans.idPelanggan = users.id JOIN
        // orderans ON informasi_pemesanans.idBooking = orderans.id');
        $data = InformasiPemesanan::all();

        return view('confirmation', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInformasiPemesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInformasiPemesananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformasiPemesanan  $informasiPemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(InformasiPemesanan $informasiPemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformasiPemesanan  $informasiPemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(InformasiPemesanan $informasiPemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInformasiPemesananRequest  $request
     * @param  \App\Models\InformasiPemesanan  $informasiPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInformasiPemesananRequest $request, InformasiPemesanan $informasiPemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformasiPemesanan  $informasiPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformasiPemesanan $informasiPemesanan)
    {
        InformasiPemesanan::destroy($informasiPemesanan->id);

        return redirect('/konfirmasi');
    }
}

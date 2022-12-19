<?php

namespace App\Http\Controllers;

use App\Models\orderan;
use App\Http\Requests\StoreorderanRequest;
use App\Http\Requests\UpdateorderanRequest;
use Illuminate\Support\Facades\DB;

class OrderanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select('select * from informasi_pemesanans JOIN
        users ON informasi_pemesanans.idPelanggan = users.id JOIN
        orderans ON informasi_pemesanans.idBooking = orderans.id');

        // return $data;
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
     * @param  \App\Http\Requests\StoreorderanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function show(orderan $orderan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function edit(orderan $orderan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderanRequest  $request
     * @param  \App\Models\orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderanRequest $request, orderan $orderan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderan  $orderan
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderan $orderan)
    {
        // $i = DB::table('form')->where('id', $id);
        // $i->delete();

        return redirect('/konfirmasi');
    }
}

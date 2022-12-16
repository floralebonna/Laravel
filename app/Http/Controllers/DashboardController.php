<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(auth()->user()->Admin){
            return view('halamanKaryawan');
        } else {
            return view('halamanPelanggan');
        }
    }
    //
}

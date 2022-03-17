<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function pegawai(){
        return view('pegawai')
        ->with('title', 'Dz Fashion - Pegawai');
    }
}

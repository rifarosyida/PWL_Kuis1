<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function pegawai(){
        $all_pegawai = Pegawai::paginate(3);

        return view('pegawai')
        ->with('title', 'Dz Fashion - Pegawai')
        ->with('all_pegawai', $all_pegawai);
    }
}

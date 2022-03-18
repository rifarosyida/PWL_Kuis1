<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang($keyword){
        $data=Barang::where('kategori','=',$keyword)->get();

        $tabs = ($keyword == 'perempuan') ? 'tabs-1' : 'tabs-2';

        return view('barang')
        ->with('title', 'Dz Fashion - Barang')
        ->with('all_barang', $data)
        ->with('tabs', $tabs);
    }
}

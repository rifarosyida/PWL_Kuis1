<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang($keyword){
        // $data=Barang::where('kategori','=',$keyword)->get();     


        $aktif = ($keyword == 'perempuan') ? 'pr' : 'lk';

        $data=Barang::where('kategori', '=', $keyword)->Paginate(
            $perPage = 6, $columns = ['*'], $pageName = $keyword
        );

        return view('barang')
        ->with('title', 'Dz Fashion - Barang')
        ->with('all_barang', $data)
        ->with('active', $aktif);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    public function pelanggan(){
        $all_pelanggan = Pelanggan::paginate(10);

        return view('pelanggan')
        ->with('title', 'Dz Fashion - Pelanggan')
        ->with('all_pelanggan', $all_pelanggan);
    }

    public function search(Request $request) {
        $keyword = $request->cari;

        $all_pelanggan = Pelanggan::where('nama', 'like', '%' . $keyword . '%')->paginate(10);
        return view('pelanggan')
            ->with('title', 'Dz Fashion - Pelanggan')
            ->with('all_pelanggan', $all_pelanggan);
    }
}

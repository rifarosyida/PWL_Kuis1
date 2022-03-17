<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplier(){
        $all_supplier = Supplier::all();

        return view('supplier')
        ->with('title', 'Dz Fashion - Supplier')
        ->with('all_supplier', $all_supplier);
    }
}

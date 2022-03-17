<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier(){
        return view('supplier')
        ->with('title', 'Dz Fashion - Supplier');
    }
}

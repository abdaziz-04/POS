<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalePageController extends Controller
{
    public function sales() {
        return view('sales');
    }
}

<?php

namespace App\Http\Controllers\Bascket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        return view('bascket');
    }
}

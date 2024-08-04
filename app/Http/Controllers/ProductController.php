<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $x=10;
        $y=20;
        return $x+$y;
    }
}

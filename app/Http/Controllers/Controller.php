<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        $x=10;
        $y=20;
        return $x+$y;
    }
}

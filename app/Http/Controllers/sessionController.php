<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function __construct()
    {
        $this->jnsPemesanan = 'coba';
        compact('this');
    }
}

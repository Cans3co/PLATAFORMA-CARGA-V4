<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        return view('biblioteca.index');
    }

    public function rab()
    {
        return view('biblioteca.rab');
    }

    public function manuales()
    {
        return view('biblioteca.manuales');
    }
}
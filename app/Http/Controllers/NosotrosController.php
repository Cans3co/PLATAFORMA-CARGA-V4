<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * Muestra la página principal "Nosotros"
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('nosotros.index', [
            'title' => 'Sobre Nosotros'
        ]);
    }

    /**
     * Muestra la página de Misión y Visión
     * 
     * @return \Illuminate\View\View
     */
    public function misionVision()
    {
        return view('nosotros.mision-vision', [
            'title' => 'Misión y Visión',
            'active_page' => 'mision-vision'
        ]);
    }

    /**
     * Muestra el organigrama de la empresa
     * 
     * @return \Illuminate\View\View
     */
    public function organigrama()
    {
        return view('nosotros.organigrama', [
            'title' => 'Nuestro Organigrama',
            'active_page' => 'organigrama',
            'last_updated' => now()->format('d/m/Y')
        ]);
    }
}
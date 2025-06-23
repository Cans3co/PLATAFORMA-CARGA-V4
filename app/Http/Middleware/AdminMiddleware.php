<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Maneja una solicitud entrante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificación más explícita
        if (Auth::guest()) {
            return redirect()->guest(route('login'))
                   ->with('error', 'Debe iniciar sesión como administrador');
        }

        if (Auth::user()->role !== 'admin') {
            abort(403, 'Acceso no autorizado');
        }

        return $next($request);
    }
}
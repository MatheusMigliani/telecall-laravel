<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->Permissao === 'admin') {
            return $next($request);
        }

        Alert('Acesso negado', 'Você não tem permissão para esta área.');

        return redirect('/index')->with('error', 'Acesso negado. Você não tem permissão de administrador.');
    }
}

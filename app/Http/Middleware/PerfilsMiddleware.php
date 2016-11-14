<?php

namespace cotagil\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PerfilsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->perfil==2) {
            return $next($request);
        }elseif (Auth::guard($guard)->check() && Auth::user()->perfil==3) {
            return redirect('/perfil/fornecedor');
        }else{
            return redirect('/');
        }


    }
}

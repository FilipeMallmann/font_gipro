<?php

namespace App\Http\Middleware;

use Closure;

class ControleDosUsuarios // desabilitado por enquanto
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // montar as rotas para o acesso dos dados dos clientes aqui;

        return $next($request);
    }
}

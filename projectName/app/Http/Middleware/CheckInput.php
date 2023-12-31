<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckInput
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       if ( $request->input('key') == '123456') return $next($request);
       abort('404');
    }
}

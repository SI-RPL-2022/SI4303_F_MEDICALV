<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('email_organisasi'))
        {
            return $next($request);
        }
        else {
            return redirect('/login')->with('error',"Silahkan login terlebih dahulu!");
        }
    }
}

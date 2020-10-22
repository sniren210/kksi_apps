<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isGuru
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
        if (auth()->user()->is_admin == null) {
            return $next($request);
        }
        return redirect()->route('dashboard');
    }
}

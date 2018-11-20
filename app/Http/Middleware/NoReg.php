<?php

namespace App\Http\Middleware;

use Closure;

class NoReg
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
		return redirect()->back()->with('error','Not Allowed!');
		
        return $next($request);
    }
}

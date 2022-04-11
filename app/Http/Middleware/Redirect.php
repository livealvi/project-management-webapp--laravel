<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Redirect
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
        $url = $request->url();
        if ($request->session()->get('user.1')) {
            redirect()->route('dashboard');
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}

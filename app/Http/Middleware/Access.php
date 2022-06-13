<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Access
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $accessor)
    {
        if ($accessor == 'admin'){
            if (Auth::user()?->is_admin != true || Auth::user() == null) {
                abort(403);
            }
        }
        if ($accessor == 'user'){
            if (Auth::user()?->is_admin == true) {
                abort(403);
            }
        }
        return $next($request);
    }
}
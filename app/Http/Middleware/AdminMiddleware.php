<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // buat ngecek user nya ada ato adminnya ada
        if (Auth::check()) {
            // Check if the authenticated user is an admin
            if (Auth::user()->isAdmin) {
                return $next($request);
            }
        }

         // kalau bukan abort 403
         abort(403, 'Unauthorized action.');

    }
}

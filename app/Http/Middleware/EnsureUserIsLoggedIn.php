<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the demo login session flag is not set
        if (!$request->session()->get('logged_in', false)) {
            return redirect('/recipes')->with('error', 'Access denied. Please log in first.');
        }

        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      

        // Check if the user has the required role
        if ($request->user()->role !== 'user') {
            // If the user does not have the required role, return a 403 Forbidden response
        return redirect()->route('user.login')->with('error', 'You must log in.');
        }

        // If authenticated and has the required role, allow the request to proceed
        return $next($request);
    }
}

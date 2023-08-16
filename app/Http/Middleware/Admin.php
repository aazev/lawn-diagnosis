<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has a role of 'admin'
        if ($request->user() && $request->user()->role == 'admin') {
            return $next($request);
        }

        // Redirect the user or return a response indicating insufficient permissions
        return redirect('/home')->with('error', 'You don\'t have admin access.');
    }
}

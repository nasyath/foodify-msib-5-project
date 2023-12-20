<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Check if the user has the required role
        if (!in_array(auth()->user()->role, $roles)) {
            //abort(403, 'Unauthorized action.');
            return redirect('/access-denied');
        }

        return $next($request);
    }
}


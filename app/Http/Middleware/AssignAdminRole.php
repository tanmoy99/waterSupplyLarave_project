<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AssignAdminRole
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && !$user->hasRole('admin')) {
            // If the user doesn't have the 'admin' role, redirect them to a different route
            return redirect()->route('user.dashboard')->with('error', 'Unauthorized Access');
        }

        return $next($request);
    }
}

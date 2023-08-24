<?php
// app/Http/Middleware/AdminMiddleware.php
use Spatie\Permission\Models\Role;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->hasRole('admin')) {
            return $next($request);
        }

        return redirect('/')->with('error', 'Unauthorized Access');
    }
}


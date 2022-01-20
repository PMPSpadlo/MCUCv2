<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guest()) {
            if (Auth::user()->rank !== 6) {
                return $next($request);
            }
            return redirect()->route('landing'); // If user is not an admin.

        } else {

            return redirect()->route('landing'); // If user is not an admin.
        }

    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class IsUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty(session('user_id'))) {
            return redirect(route('login.page'));
        }

        return $next($request);
    }
}

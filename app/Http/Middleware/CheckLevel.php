<?php

namespace App\Http\Middleware;

use Closure;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
{
    if (auth()->check()) {
        $userLevel = auth()->user()->level;
        if ($userLevel < (int)$level) {
            return redirect('/'); // Arahkan ke halaman utama jika level terlalu rendah
        }
    }
    return $next($request);
}
}

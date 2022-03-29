<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class manageAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$role)
    {
        error_log($role);
        return response()->json(["UserType"=>$role]);
        // return $next($request);
    }
}

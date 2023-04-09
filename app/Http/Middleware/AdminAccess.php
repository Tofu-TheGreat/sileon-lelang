<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (auth()->user()->level == 'Admin') {
            return $next($request);
        }

        return response()->json(['You do not have permission to access for this page.']);
        // /* return response()->view('errors.check-permission'); */

        // if (in_array($request->user()->level, $levels)) {
        //     return $next($request);
        // }
        // return response()->json(['You do not have permission to access for this page.']);
        // dd(auth()->user()->level);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\Petugas;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PetugasAccess
{
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // if (auth()->check() && auth()->user()->level == 'admin') {
        //     return $next($request);
        // }

        // return response()->json(['You do not have permission to access for this page.']);
        // /* return response()->view('errors.check-permission'); */

        // if (in_array($request->user()->level, $levels)) {
        //     return $next($request);
        // }
        // return response()->json(['You do not have permission to access for this page.']);
        dd(auth()->user()->level);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\Petugas;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PetugasAccess
{
    public function handle(Request $request, Closure $next, $userType)
    {
        if (auth()->user()->id_level == $userType) {
            return $next($request);
        }

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return response()->json(['You do not have permission to access for this page.']);
        /* return response()->view('errors.check-permission'); */
    }
}

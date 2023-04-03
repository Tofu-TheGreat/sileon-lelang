<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasAccess
{
    public function handle($request, Closure $next, ...$levels)
    {
        if (auth()->check()) {
            $user_level = auth()->user()->id_level;
            if (in_array($user_level, $levels)) {
                // User has the required level of access
                return $next($request);
            } else {
                // User does not have the required level of access
                $data['user_level'] = $user_level;
                return redirect()->route('login')->with('error', 'You do not have permission to access for this page.')->with($data);
            }
        } else {
            return redirect()->route('login');
        }
    }
}

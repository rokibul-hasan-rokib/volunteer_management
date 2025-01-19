<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        if(!Auth::user()){
            return redirect()->route('login')->with('error','Please Login First');
        }

        $user = Auth::user();
        if(!in_array($user->role, $roles)){
            return redirect()->route('dashboard')->with('error',"You do not have permission to access this account");
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->is_admin == 1){
                return redirect('admin/home');
            }
            else{
                Auth::logout();
                return redirect()->route('admin.login')->with('error','Invalid Credentials');
            }

            // return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}

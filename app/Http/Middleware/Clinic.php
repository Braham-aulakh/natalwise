<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class Clinic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()) {
            $user = request()->user();
            if ($user->hasRole(Role::$Clinic) && $request->session()->get('logged_in_as') == 'clinic') {
                return $next($request);
            } else {
                return redirect(route('login'));
            }
        } else {
            if ($request->is('super_admin') || $request->is('super_admin/*')) {
                return redirect(route('super_admin.login'));
            }
            return redirect(route('login'));
        }
    }
}

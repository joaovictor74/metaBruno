<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Autorizador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        {   switch($guard){
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('admin.dashboard'));
                }
                break;
            case 'aluno':if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('site.aluno-in'));
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('site.aluno-in');
                }
                break;
            }
        return $next($request);
    }
    }
}

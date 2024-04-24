<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('bdapps_aa_admin_id')){ 
            return $next($request);
        }else{
            return redirect(route('admin.login'));
        }
    }
}

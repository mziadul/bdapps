<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLogout
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
        if(session()->has('bdapps_aa_admin_id')) 
        {
            //  return new Response(view('middle'));

            return redirect(route('admin.home'));
            // return redirect()->back();
           
        } else{
            // dd("You are not login !!!");
            return $next($request);
        }
    }
}

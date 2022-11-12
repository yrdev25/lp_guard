<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuardMiddleware
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
            //   if($request->email == "companyone@companyone.com"){
            //             Auth::guard('companyone');
                       
            //    }elseif($request->email == "companytwo@companytwo.com"){
            //             Auth::guard('companytwo');
                       
            //    }elseif($request->email == "companythree@companythree.com"){
            //        Auth::guard('companythree');
                   
            //    }elseif($request->email == "superadmin@superadmin.com"){
            //        Auth::guard('web');                 
            //    }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
use Session;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('user.login');
        }


        // if(Auth::guard($guard)->guest()) {
        //     Session::put('oldUrl', $request->url());
        //     if($request->ajax() || $request->wantsJson()){
        //         return response('Unauthorized', 401);
        //     } else {
        //         return redirect()->route('user.login');
        //     }
        // }
        // return $next($request);
    }
}

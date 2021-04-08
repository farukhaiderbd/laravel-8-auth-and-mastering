<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Auth::guard('admin') == true) {
                return route('admin.login');
            }elseif (Auth::guard('writer') == true) {
                return route('writer.login');
            }elseif (Auth::guard('visitor') == true) {
                return route('visitor.login');
            }elseif (Auth::check() == true) {
                return route('login');
            }
        }
    }
}

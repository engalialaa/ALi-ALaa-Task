<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

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

        if ($request->is('api') || $request->is('api/*'))
            return response()->json(['message'=>'unauthorized']);

        if ($request->is('admin') || $request->is('admin/*'))
            return url('admin/login');

        return route('login');
    }
}

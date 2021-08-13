<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class APIkey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->apikey == '') {
            return redirect('/');
        } else {
            $users = User::where('access_key', $request->apikey)->count();
            if ($users != 1) {
              return response("Invalid access key");
            } else {
              return $next($request);
            }
        }
    }
}

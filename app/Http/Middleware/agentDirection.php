<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class agentDirection
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
        $id =$request->user()->identifier;
        if($id !== "1"){
            return redirect('/login');
        }
        return $next($request);
    }
}

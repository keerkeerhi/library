<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Auth;

class CheckOk
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
//        if(Auth::check())
//            return $next($request);
//        else
//            redirect('/home');
        $response = $next($request);
        Log::info(json_encode(Auth::check()));
        if(!Auth::check())
            $response->setContent(json_encode(['res'=> "no login"]));
        // Perform action

        return $response;
    }
}

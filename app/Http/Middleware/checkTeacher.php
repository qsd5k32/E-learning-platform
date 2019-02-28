<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;
use Auth;
class checkTeacher
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
        if (DB::table('users')->where('id',Auth::id())->value('level') != 2){

            return abort(403 , "you must need teacher permission to access this web page");
            
        }

        return $next($request);
    }
}

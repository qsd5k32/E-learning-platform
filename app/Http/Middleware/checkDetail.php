<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;
use Auth;


class checkDetail
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
        $details = DB::table('details')->where('user_id',Auth::id())->count();
        if($details == 0)
        {
            return redirect('account/details')->with(['warning' => 'please fill up your informations to take this course']);
        }
        return $next($request);
    }
}

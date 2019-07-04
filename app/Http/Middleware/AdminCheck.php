<?php
namespace App\Http\Middleware;
use Auth;

use Closure;

class AdminCheck
{
    public function handle($request, Closure $next)
    {

        if(Auth::user() && Auth::user()->partition_id == 1){
            return $next($request);

        }
        else{
            abort(404);
        }
    }
}

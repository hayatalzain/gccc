<?php
namespace App\Http\Middleware;
use Auth;
use Closure;

class CreatorCheck
{

    public function handle($request, Closure $next)
    {
        if(Auth::user() && (Auth::user()->partition_id == 2 ||Auth::user()->partition_id == 1)){
            return $next($request);
        }
        else{
            abort(401);
        }
    }
}

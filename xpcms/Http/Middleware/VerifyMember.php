<?php
namespace xpcms\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class VerifyMember
{
    public function handle($request,Closure $next,$guard = null)
    {
        if (Auth::guard('member')->guest()) {
            if ($request->ajax()) {
                return response('error',401);
            }
            return redirect()->guest('/user/login');
        }
        return $next($request);
    }
}

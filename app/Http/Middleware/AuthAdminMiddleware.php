<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AuthAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       try {
       $user = auth()->guard()->user();
       Log::debug($user->email );
        if($user){
            if($user->hasRole('admin')){
                return $next($request);
            }
        }
        return response("Access denaied" , 403);
       } catch (\Throwable $th) {
        Log::debug($th->getMessage() );
       }
        
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Log::info('Middleware triggered');
        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            \Log::info('User is authenticated:', ['user' => $user]);
            
            if ($user->hasRole('admin')) {
                return $next($request);
            }
            
            \Log::info('User does not have admin role:', ['user' => $user]);
        } else {
            \Log::info('User is not authenticated.');
        }
    
        \Log::info('Redirecting to admin.login');
        return redirect()->route('admin.login');
    }
}

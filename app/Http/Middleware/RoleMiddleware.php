<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        // Log that the middleware has been triggered
        \Log::info('Role Middleware Triggered for role: ' . $role);

        // Get the currently authenticated user
        $user = Auth::guard('instructor')->user();

        // Check if user is authenticated and has the required role
        if ($user && $user->hasRole($role)) {
            return $next($request);
        }

        // Log unauthorized access attempt
        \Log::info('Unauthorized access attempt for role: ' . $role);

        // Redirect to login or an access denied page
        return redirect()->route('login.instructor')->withErrors([
            'role' => 'You do not have permission to access this page.'
        ]);
    }
    

    
}

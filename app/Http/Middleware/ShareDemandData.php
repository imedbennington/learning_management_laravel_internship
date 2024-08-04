<?php

namespace App\Http\Middleware;

use App\Models\RequestHistory;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class ShareDemandData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $demands = RequestHistory::all();

        // Share data with specific views
        if ($request->routeIs('get_requests')) {
            View::share('demands', $demands);
        } elseif ($request->routeIs('admin.demands')) {
            View::share('demands', $demands);
        }

        return $next($request);
    }
}
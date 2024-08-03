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
        // Fetch demand data here if needed
        $demands = RequestHistory::all();
        // Share data with specific view
        if ($request->routeIs('demandlist')) {
            View::share('demands', $demands);
        }

        return $next($request);
    }
}

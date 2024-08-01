<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Course;
use Illuminate\Support\Facades\View;
class ShareCoursesData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $courses = Course::with(['category', 'uploader', 'students'])->get();

        // Share the courses data with all views
        View::share('courses', $courses);

        return $next($request);
    }
}

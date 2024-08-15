<?php

namespace App\Http\Middleware;

use App\Models\Instructor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use App\Models\Course;
class ShareInstructorsData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

            // Fetch all courses to share globally
    $courses = Course::all(); // Update with the correct model and logic

    // Share courses data with all views
    View::share('courses', $courses);

    // Check if the current route is for an instructor's dashboard
    if ($request->routeIs('instructor.dashboard')) {
        $instructor = auth('instructor')->user(); // Get the currently authenticated instructor

        // Ensure the instructor is authenticated
        if ($instructor) {
            // Share instructor's data with the specific view
            View::share('instructor', [
                'first_name' => $instructor->first_name,
                'last_name' => $instructor->last_name,
            ]);
        }
    }

    return $next($request);
    }


}

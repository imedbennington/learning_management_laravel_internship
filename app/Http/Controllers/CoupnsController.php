<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Coupon;
use App\Models\Course;
use Mail;
class CoupnsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'student_id' => 'required',
        ]);
    
        $student = auth('student')->user(); // Use the 'student' guard
    
        if (!$student) {
            return redirect()->route('login')->withErrors('You must be logged in to apply for a coupon.');
        }
    
        $course = Course::findOrFail($request->input('course_id'));
    
        // Generate a unique coupon code and set a discount amount
        $couponCode = strtoupper(Str::random(10));
        $discount = 10.00; // Example fixed discount, can be adjusted
    
        // Create a new coupon request
        $coupon = Coupon::create([
            'student_id' => $student->id,
            'student_name' => $student->first_name,
            'course_id' => $course->id,
            'course_name' => $course->title,
            'coupon_code' => $couponCode,
            'discount' => $discount,
        ]);
    
        return redirect()->back()->with('success', 'Coupon applied successfully!');
    }

    protected function sendCouponEmail($coupon)
    {
        $student = $coupon->student;

        Mail::send('emails.coupon', ['coupon' => $coupon], function ($message) use ($student) {
            $message->to($student->email, $student->name)
                ->subject('Your Coupon Code');
        });
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

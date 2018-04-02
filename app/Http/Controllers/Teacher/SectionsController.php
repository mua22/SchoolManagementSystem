<?php

namespace App\Http\Controllers\Teacher;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SectionsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $courses = $user->courses()->orderBy('name')->get();

        return view('teacher.classes',compact('courses'));
    }

    public function showCourse($id)
    {
        $course = Course::find($id);
        if($course->teacher_id!=Auth::user()->id)
            return "Chal Nikal";
        return view('teacher.course',compact('course'));

    }
    public function showAttendance($id)
    {
        $course = Course::find($id);
        if($course->teacher_id!=Auth::user()->id)
            return "Chal Nikal";
        return view('teacher.attendance',compact('course'));

    }
    public function saveAttendance($id,Request $request)
    {
        return $request->student;
    }
}

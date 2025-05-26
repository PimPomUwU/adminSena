<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }
 
     public function create()
    {
        return view('course.create');
    }


    public function store(Request $request)
    {

        $course = new Course();


        $course->course_number = $request->course_number;
        $course->day = $request->day;
        $course->area_id = $request->area_id;
        $course->training_center_id = $request->training_center_id;

        $course->save();

    
        return redirect()->route('course.index');
    }

    public function show(Course $course)
    {

        return view('course.show', compact('course'));
    }
    public function edit(Course $course)
    {
        return view('course.edit', compact( 'course'));
    }

    public function update(Request $request, Course $course)
    {

        $course->course_number = $request->course_number;
        $course->day = $request->day;

        $course->save();

        return redirect()->route('course.index');
    }

    public function destroy(Course $course)
    {

        $course->delete();

        return redirect()->route('course.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\TrainingCenter;

class CourseController extends Controller
{
    //
    public function index()
    {
        //API
        $courses = Course::included()->get();
        //$courses = Course::included()->filter()->get();
        //$courses = Course::included()->filter()->sort()->get();
        //$courses = Course::included()->filter()->sort()->GetOrPaginate();
        return response()->json($courses);

/*         $courses = Course::all();
        return view('course.index', compact('courses')); */
    }
 
     public function create()
    {
        $area_ids = Area::pluck('id');
        $trainingCenter_ids = TrainingCenter::pluck("id");
        return view('course.create', compact('area_ids', 'trainingCenter_ids'));
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

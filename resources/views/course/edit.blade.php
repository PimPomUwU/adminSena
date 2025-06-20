@extends('layouts.app')

@section('content')
    <div>
        <h1>Actualizar course</h1>

        <div>
            <di>
                <form action="{{ route('course.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>

                        <label for="course_number">course_number</label>
                        <input type="text"name="course_number"id="course_number"value="{{ old('course_number', $course->course_number) }}" placeholder="">                        
                        <label for="day">day</label>
                        <input type="text"name="day"id="day"value="{{ old('course_number', $course->day) }}" placeholder="">

                    </div>

                    <button type="submit"> Actualizar course </button>
                </form>
            </div>
        </div>
    </div>
@endsection
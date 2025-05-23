@extends('layouts.app')
@section('content')
<h1>Course create:</h1>
<form action="{{ route('course.store') }}"method="POST" enctype="multipart/form-data">
    @csrf
        <label for="title">Course number</label>
        <input type="text" id="title" name="course_number" required>
    <br>
            <label for="title">Day</label>
        <input type="text" id="title" name="day" required>

    <button type="submit">Crear</button>

</form>
@endsection
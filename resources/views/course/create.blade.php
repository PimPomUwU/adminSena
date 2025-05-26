@extends('layouts.app') 

@section('content')
<h1>Formulario Course:</h1>

<form action="{{ route('course.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="course_number">Course number:</label>
    <input type="text" id="course_number" name="course_number"> <br>
    <label for="day">dia:</label>
    <input type="text" id="day" name="day"> <br>

    <button type="submit">Subir</button>
</form>
@endsection
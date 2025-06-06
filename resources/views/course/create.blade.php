@extends('layouts.app') 

@section('content')
<h1>Formulario Course:</h1>

<form action="{{ route('course.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="area_id">Area id:</label>
    <select name="area_id" id="">
        @foreach ($area_ids as $area)
            <option value="{{$area}}">{{$area}}</option>
        @endforeach
    </select>
    <br>
    <label for="training_center_id">Training center id:</label>
    <select name="training_center_id" id="">
        @foreach ($trainingCenter_ids as $trainingCenter)
            <option value="{{$trainingCenter}}">{{$trainingCenter}}</option>
        @endforeach
    </select>
    <br>
    <label for="course_number">Course number:</label>
    <input type="text" id="course_number" name="course_number"> <br>
    <label for="day">dia:</label>
    <input type="text" id="day" name="day"> <br>

    <button type="submit">Subir</button>
</form>
@endsection
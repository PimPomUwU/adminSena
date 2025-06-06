@extends('layouts.app')
@section('content')
<h1>Teacher create:</h1>
<form action="{{ route('teacher.store') }}"method="POST" enctype="multipart/form-data">
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
        <label for="title">Name</label>
        <input type="text" id="title" name="name" required>
    <br>
            <label for="title">Email</label>
        <input type="text" id="title" name="email" required>

    <button type="submit">Crear</button>

</form>
@endsection


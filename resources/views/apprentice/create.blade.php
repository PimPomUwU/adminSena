@extends('layouts.app') 

@section('content')
<h1>Formulario de apprentices:</h1>
<form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="course_id">Curso:</label>
    <select name="course_id">
        @foreach ($course_ids as $course)
          <option value="{{$course}}">{{ $course}}</option>
        @endforeach
      </select>
    <br>
    <label for="computer_id">Computador:</label>
    <select name="computer_id">
        @foreach ($computer_ids as $computer)
          <option value="{{$computer}}">{{ $computer}}</option>
        @endforeach
      </select>
    <br>
    <label for="nombre">Name:</label>
    <br>
    <input type="text" id="nombre" name="name" >
    <br>
    <label for="nombre">Email:</label>
    <br>
    <input type="text" id="nombre" name="email" >
    <br>
    <label for="nombre">Cell number:</label>
    <br>
    <input type="text" id="nombre" name="cell_number" >
    <br>
    <button type="submit">Subir</button>
</form>
@endsection


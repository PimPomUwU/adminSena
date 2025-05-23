@extends('layouts.app')
@section('content')
<h1>Teacher create:</h1>
<form action="{{ route('teacher.store') }}"method="POST" enctype="multipart/form-data">
    @csrf
        <label for="title">Name</label>
        <input type="text" id="title" name="name" required>
    <br>
            <label for="title">Email</label>
        <input type="text" id="title" name="email" required>

    <button type="submit">Crear</button>

</form>
@endsection


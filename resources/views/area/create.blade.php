@extends('layouts.app') 

@section('content')
<h1>Formulario de areas:</h1>
<form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Name:</label>
    <br>
    <input type="text" id="nombre" name="name" >
    <br>
    <button type="submit">Subir</button>
</form>
@endsection


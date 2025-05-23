@extends('layouts.app') 

@section('content')
<h1>Formulario de apprentices:</h1>
<form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
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


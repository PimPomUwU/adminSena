@extends('layouts.app') 

@section('content')
<h1>Formulario Training Centers:</h1>

<form action="{{ route('training-center.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="name"> <br>
    <label for="localizacion">Localizacion:</label>
    <input type="text" id="localizacion" name="location"> <br>

    <button type="submit">Subir</button>
</form>
@endsection
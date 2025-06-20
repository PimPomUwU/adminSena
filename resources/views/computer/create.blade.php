@extends('layouts.app') 

@section('content')
<h1>Formulario Computers:</h1>

<form action="{{ route('computer.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="numero">Numero:</label>
    <input type="number" id="numero" name="number"> <br>
    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="brand"> <br>

    <button type="submit">Subir</button>
</form>
@endsection
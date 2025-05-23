@extends('layouts.app')

@section('content')
    <h1>Lista de Training Centers:</h1>
    <tbody>
        {{ $training_centers }}
    </tbody>
@endsection
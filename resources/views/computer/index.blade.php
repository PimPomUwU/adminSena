@extends('layouts.app')

@section('content')
    <h1>Lista de computers:</h1>
    <tbody>
        {{ $computers }}
    </tbody>
@endsection
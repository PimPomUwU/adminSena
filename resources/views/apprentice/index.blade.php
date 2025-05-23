@extends('layouts.app')

@section('content')
    <h1>Lista de apprentices:</h1>
    <tbody>
        {{ $apprentices }}
    </tbody>
@endsection

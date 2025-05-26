@extends('layouts.app')

@section('content')
    <h1>Lista de apprentices:</h1>
    <a href="{{ route('apprentice.create') }}"><button type="button">create</button></a>

    <tbody>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
            @foreach ($apprentices as $apprentice)
                <tr>
                    <td>{{ $apprentice['id'] }}</td>
                    <td>{{ $apprentice['name'] }}</td>

                    <td>
                        <a href="{{ route('apprentice.show', $apprentice['id']) }}"> Ver más </a>
                    </td>
                    <td>
                        <a href="{{ route('apprentice.edit', $apprentice['id']) }}"> Editar </a>
                    </td>
    
                    <td>
                        <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit"> Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </tbody>
@endsection

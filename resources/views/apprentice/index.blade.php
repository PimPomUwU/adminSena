@extends('layouts.app')

@section('content')
    <a href="{{ route('apprentice.create') }}"><button type="button">create</button></a>

    <h1>Lista de apprentices:</h1>
    <tbody>
        @foreach ($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice['id'] }}</td>
                <td>{{ $apprentice['name'] }}</td>
                <td>{{ $apprentice['email'] }}</td>
                <td>{{ $apprentice['cell_number'] }}</td>

                <td>
                    <a href="{{ route('apprentice.show', $apprentice['id']) }}" class="btn 
                    -info btn-sm">Ver más </a>
                </td>
                <td>
               <a href="{{ route('apprentice.edit', $apprentice['id']) }}" class="btn btn-info btn-sm">Editar </a>
                </td>

                <td>
                    <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                            <i class="bi bi-trash-fill"></i> Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
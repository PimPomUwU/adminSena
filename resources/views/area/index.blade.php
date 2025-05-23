@extends('layouts.app')

@section('content')
    <a href="{{ route('area.create') }}"><button type="button">create</button></a>

    <h1>Lista de areas:</h1>
    <tbody>
               @foreach ($areas as $area)
            <tr>
                <td>{{ $area['id'] }}</td>
                <td>{{ $area['name'] }}</td>

                <td>
                    <a href="{{ route('area.show', $area['id']) }}" class="btn 
                    -info btn-sm">Ver más</a>
                </td>
                <td>
                    <a href="{{ route('area.edit', $area['id']) }}" class="btn btn-info btn-sm">Editar </a>
                </td>

                <td>
                    <form action="{{ route('area.destroy', $area->id) }}" method="POST">
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

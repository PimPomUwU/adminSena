@extends('layouts.app')

@section('content')

    <h1>Lista de areas:</h1>

    <a href="{{ route('area.create') }}"><button type="button">create</button></a>

    <tbody>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
            @foreach ($areas as $area)
                <tr>
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['name'] }}</td>
    
                    <td>
                        <a href="{{ route('area.show', $area['id']) }}"> Ver más </a>
                    </td>
                    <td>
                        <a href="{{ route('area.edit', $area['id']) }}"> Editar </a>
                    </td>
    
                    <td>
                        <form action="{{ route('area.destroy', $area->id) }}" method="POST">
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

@extends('layouts.app')

@section('content')
    <h1>Lista de computers:</h1>
    <form action="{{ route('computer.create') }}" method="get">
        <button>Crear</button>
    </form>
    <tbody>
        <table>
            <tr>
                <th>ID</th>
                <th>NUMBER</th>
            </tr>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['brand'] }}</td>
                    
                    <td><a href="{{route('computer.show',  $computer['id'])}}"> Ver mas </a></td>
                    <td><a href="{{route('computer.edit', $computer['id'])}}"> Editar </a></td>
                    <td>
                        <form action="{{route('computer.destroy', $computer['id'])}}" method="POST">
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

@extends('layouts.app')

@section('content')
    <h1>Lista de Training Centers:</h1>
    <form action="{{ route('training-center.create') }}" method="get">
        <button>Crear</button>
    </form>
    <tbody>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
            @foreach ($training_centers as $training_center)
                <tr>

                    <td>{{ $training_center['id'] }}</td>
                    <td>{{ $training_center['name'] }}</td>

                    
                    <td><a href="{{route('training-center.show',  $training_center['id'])}}"> Ver mas </a></td>
                    <td><a href="{{route('training-center.edit', $training_center['id'])}}"> Editar </a></td>
                    <td>
                        <form action="{{route('training-center.destroy', $training_center['id'])}}" method="POST">
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
@extends('layouts.app')

@section('content')
<h1>Lista de teachers:</h1>
<form action="{{ route('teacher.create') }}" method="get">
    <button>Crear</button>
</form>
<tbody>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher['id'] }}</td>
                <td>{{ $teacher['name'] }}</td>
                
                <td><a href="{{route('teacher.show',  $teacher['id'])}}"> Ver mas </a></td>
                <td><a href="{{route('teacher.edit', $teacher['id'])}}"> Editar </a></td>
                <td>
                    <form action="{{route('teacher.destroy', $teacher['id'])}}" method="POST">
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
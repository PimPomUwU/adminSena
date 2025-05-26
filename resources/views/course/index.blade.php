@extends('layouts.app')

@section('content')
<h1>Lista de course:</h1>
<form action="{{ route('course.create') }}" method="get">
    <button>Crear</button>
</form>
<tbody>
    <table>
        <tr>
            <th>ID</th>
            <th>COURSE_NUMBER</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['course_number'] }}</td>
                
                <td><a href="{{route('course.show',  $course['id'])}}"> Ver mas </a></td>
                <td><a href="{{route('course.edit', $course['id'])}}"> Editar </a></td>
                <td>
                    <form action="{{route('course.destroy', $course['id'])}}" method="POST">
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
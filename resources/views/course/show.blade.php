@extends('layouts.app')

@section('content')

<div>
    <h2>Detalles de course </h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>course_number</th>
                    <th>day</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $course['id'] }}</td>
                    <td>{{ $course['course_number'] }}</td>
                    <td>{{ $course['day'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
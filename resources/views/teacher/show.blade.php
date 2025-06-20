@extends('layouts.app')

@section('content')

<div>
    <h2>Detalles de teacher</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Area id</th>
                    <th>TrainingCenter id</th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>email</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $teacher['area_id'] }}</td>
                    <td>{{ $teacher['training_center_id'] }}</td>
                    <td>{{ $teacher['id'] }}</td>
                    <td>{{ $teacher['name'] }}</td>
                    <td>{{ $teacher['email'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
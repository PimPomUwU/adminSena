@extends('layouts.app')

@section('content')

<div>
    <h2>Detalles de TRAINING CENTER</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>location</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $training_center['id'] }}</td>
                    <td>{{ $training_center['name'] }}</td>
                    <td>{{ $training_center['location'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
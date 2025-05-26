@extends('layouts.app')

@section('content')

<div>
    <h2>Detalles de Computador</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Number</th>
                    <th>BRAND</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['number'] }}</td>
                    <td>{{ $computer['brand'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
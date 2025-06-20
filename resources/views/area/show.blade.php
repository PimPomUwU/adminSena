@extends('layouts.app')

@section('content')

<div>
    <h2>Detalles de Categoría</h2>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['name'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
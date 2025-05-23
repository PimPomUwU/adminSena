@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Apprentice</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('area.update', $area->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $area->name) }}" placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Apprentice
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
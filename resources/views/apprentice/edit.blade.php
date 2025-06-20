@extends('layouts.app')

@section('content')
    <div>
        <h1 >Actualizar Apprentice</h1>

        <div>
            <div>
                <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name">Nombre</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $apprentice->name) }}" placeholder="">
                        <label for="name">Email</label>
                        <input type="text"name="email"id="email"value="{{ old('email', $apprentice->email) }}" placeholder="">
                        <label for="name">Cell number</label>
                        <input type="text"name="cell_number"id="cell_number"value="{{ old('cell_number', $apprentice->cell_number) }}" placeholder="">

                    </div>

                    <button type="submit"> Actualizar Apprentice </button>
                </form>
            </div>
        </div>
    </div>
@endsection
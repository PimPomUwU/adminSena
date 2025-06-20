@extends('layouts.app')

@section('content')
    <div>
        <h1>Actualizar Apprentice</h1>

        <div>
            <di>
                <form action="{{ route('area.update', $area->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>

                        <label for="name">Nombre</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $area->name) }}" placeholder="">

                    </div>

                    <button type="submit"> Actualizar Apprentice </button>
                </form>
            </div>
        </div>
    </div>
@endsection
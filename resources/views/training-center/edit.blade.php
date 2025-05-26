@extends('layouts.app')

@section('content')
    <div>
        <h1>Actualizar Computer</h1>

        <div>
            <di>
                <form action="{{ route('training-center.update', $training_center->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>

                        <label for="name">name</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $training_center->name) }}" placeholder="">                        
                        <label for="location">location</label>
                        <input type="text"name="location"id="location"value="{{ old('location', $training_center->location) }}" placeholder="">

                    </div>

                    <button type="submit"> Actualizar training-center </button>
                </form>
            </div>
        </div>
    </div>
@endsection
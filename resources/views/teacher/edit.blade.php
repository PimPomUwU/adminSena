@extends('layouts.app')

@section('content')
    <div>
        <h1>Actualizar teacher</h1>

        <div>
            <di>
                <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>

                        <label for="name">nombre</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $teacher->name) }}" placeholder="">                        
                        <label for="email">email</label>
                        <input type="text"name="email"id="email"value="{{ old('email', $teacher->email) }}" placeholder="">

                    </div>

                    <button type="submit"> Actualizar teacher </button>
                </form>
            </div>
        </div>
    </div>
@endsection
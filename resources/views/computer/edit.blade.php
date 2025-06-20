@extends('layouts.app')

@section('content')
    <div>
        <h1>Actualizar Computer</h1>

        <div>
            <di>
                <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>

                        <label for="number">Numero</label>
                        <input type="text"name="number"id="number"value="{{ old('number', $computer->number) }}" placeholder="">                        
                        <label for="branch">Brand</label>
                        <input type="text"name="brand"id="brand"value="{{ old('brand', $computer->brand) }}" placeholder="">

                    </div>

                    <button type="submit"> Actualizar Computer </button>
                </form>
            </div>
        </div>
    </div>
@endsection
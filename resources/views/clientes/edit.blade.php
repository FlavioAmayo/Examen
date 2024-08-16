@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" value="{{ old('nombres', $cliente->nombres) }}">
            @error('nombres')
                <div>{{ $message }}</div>
            @enderror
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $cliente->email) }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $cliente->direccion) }}">
            @error('direccion')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="fono">Fono:</label>
            <input type="text" name="fono" id="fono" value="{{ old('fono', $cliente->fono) }}">
            @error('fono')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Actualizar Cliente</button>
    </form>

    <a href="{{ route('clientes.index') }}">Volver a la lista de clientes</a>
@endsection

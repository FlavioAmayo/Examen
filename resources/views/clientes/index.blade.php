@extends('layouts.app')

@section('content')
    <h1>Clientes</h1>
    <a href="{{ route('clientes.create') }}">Crear nuevo cliente</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Fono</th>
            <th>Acciones</th>
        </tr>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombres }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->fono }}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

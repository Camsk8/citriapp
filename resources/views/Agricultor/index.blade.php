@extends('Template.Template')
@section('plantillaweb')
    <h1>Lista de agricultores </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombres</th>
                <th scope="col">apellidos</th>
                <th scope="col">cedula</th>
                <th scope="col">email</th>
                <th scope="col">telefono</th>
                <th scope="col">password</th>
                <th scope="col">tipo_rol</th>
                <th scope="col">certificado_agricultor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agricultors as $agricultor)
                <tr>
                    <th scope="row">{{ $agricultor->id }}</th>
                    <td>{{ $agricultor->nombres }}</td>
                    <td>{{ $agricultor->apellidos }}</td>
                    <td>{{ $agricultor->cedula }}</td>
                    <td>{{ $agricultor->email }}</td>
                    <td>{{ $agricultor->telefono}}</td>
                    <td>{{ $agricultor->password }}</td>
                    <td>{{ $agricultor->tipo_rol }}</td>
                    <td>{{ $agricultor->certificado_agricultor }}</td>
                    <td>
                <a  class="btn btn-warning btm-sm" role="button" href="{{route('agricultor.edit',($agricultor))}}">Editar</a>
            </td>
            <td>
                <form action="{{route('agricultor.destroy',($agricultor))}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $agricultors->links() }}

@endsection
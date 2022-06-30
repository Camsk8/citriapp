@extends('Template.Template')
@section('plantillaweb')
    <h1>Editar registros  de los agricultores</h1>
    <form action="{{route('agricultor.update',$agricultors)}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        
        <div class="col">
        <label>nombres</label>
        <input type="text" name="nombres"value="{{$agricultors->nombres}}">
        </div>
        <div class="col">
            <label>apellidos</label>
            <input type="text" name="apellidos"value="{{$agricultors->apellidos}}">
        </div>
        <div class="col">
            <label> cedula</label>
            <input type="number" name="cedula" value="{{$agricultors->cedula}}">
        </div>
        <div class="col">
            <label>email</label>
            <input type="text" name="email"value="{{$agricultors->email}}">
        </div>
        <div class="col">
            <label>telefono</label>
            <input type="number" name="telefono"value="{{$agricultors->telefono}}">
        </div>
        <div class="col">
            <label>password</label>
            <input type="password" name="password"value="{{$agricultors->password}}">
        </div>
        <div class="col">
            <label>tipo_rol</label>
            <input type="text" name="tipo_rol"value="{{$agricultors->tipo_rol}}">
        </div>
        <div class="col">
            <label>certificado_agricultor</label>
            <input type="text" name="certificado_agricultor"value="{{$agricultors->certificado_agricultor}}">
        </div>
        <input type="submit" name="btn_enviar" value="Actualizar">
    </form>
@endsection
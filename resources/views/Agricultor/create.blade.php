@extends('Template.Template')
@section('plantillaweb')
    <h1>Registro agricultores </h1>
    <form action="{{route('agricultor.store')}}" method="post">
        {{csrf_field()}}
        <div class="col">
        <label>nombres </label>
        <input type="text" name="nombres">
        </div>
        <div class="col">
            <label>apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div class="col">
            <label> cedula</label>
            <input type="number" name="cedula">
        </div>
        <div class="col">
            <label>email</label>
            <input type="text" name="email">
        </div>
        <div class="col">
            <label>telefono</label>
            <input type="number" name="telefono">
        </div>
        <div class="col">
            <label>passwod</label>
            <input type="password" name="password">
        </div>
        <div class="col">
            <label>Tipo rol</label>
            <input type="text" name="tipo_rol">
        </div>
        <div class="col">
            <label>certificado agricultor</label>
            <input type="text" name="certificado_agricultor">
        </div>
        <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection
@extends('layouts.app1')

@section('contenido')

<div class="container">
    <form action="{{route('piloto.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">F.Nacimiento</label>
            <input type="date" name="f_nacimiento" id="f_nacimiento" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>

        <input type="submit" value="Crear Piloto" class="btn btn-success m-3">
        <input type="reset" value="Limpiar" class="btn btn-warning m-3">

</form>

</div>

@endsection
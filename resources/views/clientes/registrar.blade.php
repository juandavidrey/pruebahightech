@extends('clientes.header')

@section('title','Registrar')
@include('clientes.navbar')
<div class="container justify-content-center align-items-center">
    <form class="form-horizontal" method="POST" action="{{ route('clientes.registrar') }}">
        @csrf
            <fieldset>

            <!-- Form Name -->
            <legend>Datos del cliente a registrar</legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="tarjeta">Número de la tarjeta</label>
            <div class="col-md-4">
            <input id="tarjeta_credito" name="tarjeta_credito" type="text"
            placeholder="Número de la tarjeta" class="form-control input-md" required>

            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="cedula">Cédula de ciudadanía</label>
            <div class="col-md-4">
            <input id="cedula" name="cedula" type="text"
            placeholder="Número de identificación" class="form-control input-md" required>

            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombre del cliente</label>
            <div class="col-md-4">
            <input id="nombre" name="nombre" type="text"
            placeholder="Nombre completo" class="form-control input-md" required>

            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="direccion">Dirección del cliente</label>
            <div class="col-md-4">
            <input id="direccion" name="direccion" type="text"
            placeholder="Dirección completa" class="form-control input-md">

            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="telefono">Teléfono</label>
            <div class="col-md-4">
            <input id="telefono" name="telefono" type="text"
            placeholder="Número de contacto" class="form-control input-md">

            </div>
            </div>

            <!-- Button -->
            <div class="form-group">
            <div class="col-md-4">
                <button type="submit" id="botonRegistrar" name="botonRegistrar" class="btn btn-success">Registrar</button>
            </div>
            </div>

            </fieldset>
    </form>
</div>

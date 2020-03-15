@extends('clientes.header')
@section('title','Editar')

<body>
@include('clientes.navbar')

    <div id="app">

    <div class="container">

        <form class="form-horizontal" method="POST" action="{{ route('clientes.actualizar', $cliente->id) }}">
            @method('PUT')
            @csrf
            <fieldset>

            <!-- Form Name -->
            <legend>Datos del cliente a registrar</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="tarjeta">Número de la tarjeta</label>
              <div class="col-md-4">
              <input id="tarjeta" value="{{ $cliente->tarjeta_credito }}"
              name="tarjeta" type="text" placeholder="Número de la tarjeta" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cedula">Cédula de ciudadanía</label>
              <div class="col-md-4">
              <input id="cedula" value="{{$cliente->cedula}}"
              name="cedula" type="text" placeholder="Número de identificación" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre del cliente</label>
              <div class="col-md-4">
              <input id="nombre" value="{{ $cliente->nombre }}"
              name="nombre" type="text" placeholder="Nombre completo" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="direccion">Dirección del cliente</label>
              <div class="col-md-4">
              <input id="direccion" value="{{ $cliente->direccion }}"
              name="direccion" type="text" placeholder="Dirección completa" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefono">Teléfono</label>
              <div class="col-md-4">
              <input id="telefono" value="{{ $cliente->telefono }}"
              name="telefono" type="text" placeholder="Número de contacto" class="form-control input-md">

              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4">
                <button type="submit" id="botonRegistrar" name="botonRegistrar" class="btn btn-success">Editar</button>
              </div>
            </div>

            </fieldset>
            </form>


</div>
</div>

</body>

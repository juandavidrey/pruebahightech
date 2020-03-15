@extends('clientes.header')
@section('title','Mostrar')
<body>
@include('clientes.navbar')

    <div class="container">

        <form class="form-horizontal" >
            <fieldset>

            <!-- Form Name -->
            <legend>Datos del cliente seleccionado</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="tarjeta">Número de la tarjeta</label>
              <div class="col-md-4">
              <input id="tarjeta" value="{{ $cliente[0]->tarjeta_credito }}" disabled
              name="tarjeta" type="text" placeholder="Número de la tarjeta" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cedula">Cédula de ciudadanía</label>
              <div class="col-md-4">
              <input id="cedula" value="{{$cliente[0]->cedula}}" disabled
              name="cedula" type="text" placeholder="Número de identificación" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre del cliente</label>
              <div class="col-md-4">
              <input id="nombre" value="{{ $cliente[0]->nombre }}" disabled
              name="nombre" type="text" placeholder="Nombre completo" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="direccion">Dirección del cliente</label>
              <div class="col-md-4">
              <input id="direccion" value="{{ $cliente[0]->direccion }}" disabled
              name="direccion" type="text" placeholder="Dirección completa" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefono">Teléfono</label>
              <div class="col-md-4">
              <input id="telefono" value="{{ $cliente[0]->telefono }}" disabled
              name="telefono" type="text" placeholder="Número de contacto" class="form-control input-md">

              </div>
            </div>

            </fieldset>
            </form>
</div>

</body>

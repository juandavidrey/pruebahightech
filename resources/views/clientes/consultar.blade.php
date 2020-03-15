@extends('clientes.header')

@section('title','Consultar')
@include('clientes.navbar')
<body>
    <div class="box box-primary">
            <div class="container">
                <form class="form-horizontal" method="GET" action="{{ route('clientes.buscar') }}">
                    @csrf
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Buscar cliente</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-4">
                            <input id="buscar" name="buscar" type="text"
                            placeholder="Ingresa el número completo de la cédula de ciuadanía"
                            class="form-control input-md" required>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-4">
                            <button id="singlebutton" type="submit"
                            name="singlebutton" class="btn btn-info">Buscar</button>
                        </div>
                        </div>
                    </div>

                    <!-- Button -->
                    {{-- <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    </div> --}}

                    </fieldset>
                </form>

                <table id="posta-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Tarjeta de crédito</th>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->tarjeta_credito }}</td>
                        <td>{{ $cliente->cedula }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>
                            {{-- editar --}}
                            <a href="{{ route('clientes.editar', $cliente->id) }}" class="btn btn-xs btn-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                            {{-- eliminar --}}
                            <form method="POST"
                                action="{{ route('clientes.eliminar', $cliente->id) }}"
                                style="display:inline;">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button  class="btn btn-xs btn-danger"
                                    onclick="return confirm('¿Estás seguro de querer eliminar este cliente?')"
                                ><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</body>

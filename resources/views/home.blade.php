@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Has iniciado sesión!
                <div class="links" class="container">
                    <div class="row">
                        <div class="col text-center">
                            <a href="{{ URL::to('clientes/registrar') }}" class="btn btn-secondary  btn-lg active" >Registrar</a>
                            <a href="{{ URL::to('clientes/consultar') }}" class="btn btn-secondary  btn-lg active">Listar</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')

<form method="POST" action="{{ url('cliente/update/'.$cliente->id) }}">
    @csrf

    <div class="card card-danger">
        <div class="card-header">
        <h3 class="card-title">Input masks</h3>
        </div>
        <div class="card-body">
        
        <div class="form-group">
        <label>Nome:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
        </div>
        <input type="text" name="nome" class="form-control"  value="{{ $cliente->nome }}">
        </div>
        
        </div>
        
        
        <div class="form-group">
        <label>E-mail:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" name="email" class="form-control"   value="{{ $cliente->email }}">
        </div>
        
        </div>
        
        
        <div class="form-group">
        <label>Telefone:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="tel" name="telefone" class="form-control"
        
        data-mask="" inputmode="text"
        value="{{ $cliente->telefone }}">
        </div>
        
        </div>
        
        
        <div class="form-group">
        <label>Endereço:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
        </div>
        <input type="text" name="endereco" class="form-control" value="{{ $cliente->endereco }}">
        </div>
        
        </div>

        <div class="form-group">
        <label>Nº / Complemento:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
        </div>
        <input type="text" name="complemento" class="form-control" value="{{ $cliente->complemento }}">
        </div>
        
        </div>


        <div class="form-group">
        <label>CEP:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
        </div>
        <input type="text" name="cep" class="form-control"  value="{{ $cliente->cep }}">
        </div>
        
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>

        </div>
        
        </div>

</form>

@stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
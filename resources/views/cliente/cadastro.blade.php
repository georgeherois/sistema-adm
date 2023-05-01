

@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')

<h1>Cadastrar Cliente</h1>


<form method="POST" action="{{ route('salvar.cliente') }}">
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
        <input type="text" name="nome" class="form-control"  placeholder="Nome Completo">
        </div>
        
        </div>

        <div class="form-group">
        <label>CPF:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
        </div>
        <input type="text" name="cpf" class="form-control"  placeholder="000.000.000-00">
        </div>
        
        </div>

        
        
        <div class="form-group">
        <label>E-mail:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" name="email" class="form-control"   placeholder="exemplo@email.com">
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
        placeholder="(99) 99999-9999">
        </div>
        
        </div>
        
        
        <div class="form-group">
        <label>Endereço:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
        </div>
        <input type="text" name="endereco" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" inputmode="decimal">
        </div>
        
        </div>

        <div class="form-group">
        <label>Nº / Complemento:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
        </div>
        <input type="text" name="complemento" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" inputmode="decimal">
        </div>
        
        </div>


        <div class="form-group">
        <label>CEP:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
        </div>
        <input type="text" name="cep" class="form-control"  placeholder="99999-999">
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
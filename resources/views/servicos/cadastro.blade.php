

@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Serviços</h1>
@stop

@section('content')

<h1>Cadastrar Serviço</h1>


<form method="POST" action="{{ route('salvar.servico') }}">
    @csrf

    <div class="card card-danger">
        <div class="card-header">
        <h3 class="card-title">Input masks</h3>
        </div>
        <div class="card-body">
        
        <div class="form-group">
        <label>Nome Serviço:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
        </div>
        <input type="text" name="nome" class="form-control"  placeholder="Nome Completo">
        </div>
        
        </div>

        <div class="form-group">
        <label>Valor:</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text">$</span>
            </div>
            <input type="text" name="valor" class="form-control">
            <div class="input-group-append">
            <span class="input-group-text">.00</span>
            </div>
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
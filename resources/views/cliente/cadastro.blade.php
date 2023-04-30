

@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')

<h1>Cadastrar Cliente</h1>


<form method="POST" action="{{ route('salvar.agenda') }}">
    <div class="card card-danger">
        <div class="card-header">
        <h3 class="card-title">Input masks</h3>
        </div>
        <div class="card-body">
        
        <div class="form-group">
        <label>Date masks:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
        </div>
        <input class="form-control" type="text" placeholder="Default input">
        </div>
        
        </div>
        
        
      
      
        
        
        <div class="form-group">
        <label>US phone mask:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text">
        </div>
        
        </div>
        
        
        <div class="form-group">
        <label>Intl US phone mask:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" inputmode="text">
        </div>
        
        </div>
        
        
        <div class="form-group">
        <label>IP mask:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" inputmode="decimal">
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
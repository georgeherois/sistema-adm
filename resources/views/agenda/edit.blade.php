
@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Agenda</h1>
@stop

@section('content')

<div class="col-lg-12">
    <div class="card card-default">

        <div class="card-body">
        <form action="{{ url('agenda/update/'.$evento->id) }}" method="POST"> 
            @csrf
                <div class="form-group">
                 
                    <label for="exampleFormControlInput1">Nome Cliente</label>
                    
                    <select name="user_id">
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}"   @if($evento->cliente_id == $cliente->id ) selected @endif   >{{ $cliente->nome }}</option>
                        @endforeach
                    </select>


                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Data</label>
                    <input type="datetime-local" name="data_hora" value="{{ $evento->data }}"  required>
                </div>

                    
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Atualizar</button>
                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
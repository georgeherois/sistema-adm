

@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')

<h1>Cadastrar Serviços</h1>

<a href="{{ url('cliente/cadastro/')}}" class="btn btn-info"> Cadastar Serviço </a>



    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>Valor</th>

            </tr>
        </thead>
        <tbody>
            @foreach($servicos as $servico)
                <tr>
                    
                    <td>{{ $servico->id }}</td>
                    <td>{{ $servico->nome }}</td>
                    <td>{{ $servico->valor }}</td>
                   
                    <td>
                        <a href="{{ url('cliente/edit/'.$servico->id)}}" class="btn btn-info"> editar</a>
                        <a href="{{ url('cliente/delete/'.$servico->id)}}" onclick="return confirm('Tem certeza que quer deletar ?')" class="btn btn-danger"> apagar</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
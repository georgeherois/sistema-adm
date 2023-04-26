

@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agenda</h1>
@stop

@section('content')

<h1>Novo agendamento</h1>

<!--
<form method="POST" action="{{ route('salvar.agenda') }}">
    @csrf
<input type="datetime-local" name="data_hora"  required>

<select name="user_id">
    @foreach ($clientes as $cliente)
        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
    @endforeach
</select>

<button type="submit" class="btn btn-primary">Salvar</button>

</form>
-->


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>e-mail</th>
                <th>telefone</th>
                <th>endereco</th>
                <th>complemento</th>
                <th>cep</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>{{ $cliente->complemento }}</td>
                    <td>{{ $cliente->cep }}</td>
                    
                    <td>
                        <a href="{{ url('agenda/edit/'.$cliente->id)}}" class="btn btn-info"> editar</a>
                        <a href="{{ url('agenda/delete/'.$cliente->id)}}" onclick="return confirm('Tem certeza que quer deletar ?')" class="btn btn-danger"> apagar</a>

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
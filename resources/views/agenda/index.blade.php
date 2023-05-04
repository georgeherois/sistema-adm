

@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agenda</h1>
@stop

@section('content')

<h1>Novo agendamento</h1>

<form method="POST" action="{{ route('salvar.agenda') }}">
    @csrf
<input type="datetime-local" name="data_hora"  required>

<select name="user_id">
    @foreach ($clientes as $cliente)
        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
    @endforeach
</select>

<select name="servico_id">
    @foreach ($servicos as $servico)
        <option value="{{ $servico->id }}">{{ $servico->nome }}</option>
    @endforeach
</select>

<button type="submit" class="btn btn-primary">Salvar</button>

</form>



    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Data</th>
                <th>Hora</th>
                <th>contato</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
                <tr>
                    
                    <td>{{ $nome_cliente = $evento->cliente->nome; }}</td>
                    <td>{{ date('d/m/Y', strtotime($evento->data)) }}</td>
                    <td>{{ date('H:i', strtotime($evento->data)) }}</td>
                    <td>{{ $nome_cliente = $evento->cliente->telefone; }}</td>
                    <td>
                        <a href="{{ url('agenda/edit/'.$evento->id)}}" class="btn btn-info"> editar</a>
                        <a href="{{ url('agenda/delete/'.$evento->id)}}" onclick="return confirm('Tem certeza que quer deletar ?')" class="btn btn-danger"> apagar</a>

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
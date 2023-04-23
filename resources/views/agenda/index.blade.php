

@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agenda</h1>
@stop



 <h1>Agenda</h1>

    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Data</th>
                <th>Hora</th>
                <th>contato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
                <tr>
                    
                    <td>{{ $nome_cliente = $evento->cliente->nome; }}</td>
                    <td>{{ date('d/m/Y', strtotime($evento->data)) }}</td>
                    <td>{{ date('H:i', strtotime($evento->data)) }}</td>
                    <td>{{ $nome_cliente = $evento->cliente->telefone; }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


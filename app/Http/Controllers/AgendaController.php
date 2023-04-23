<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Cliente;

class AgendaController extends Controller
{
    public function index()
    {
        $eventos = Agenda::with('cliente')->get();
        $clientes = Cliente::all();

        return view('agenda.index', ['eventos' => $eventos], ['clientes' => $clientes] );
    }

    public function show($id)
    {
        $evento = Agenda::find($id);

        return view('agenda.show', ['evento' => $evento]);
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function agendaSalvar(Request $request)
    {
        //dd($request);

        $agenda = new Agenda;

        $agenda->cliente_id = $request->user_id;
        $agenda->data = $request->data_hora;
               
        $agenda->save();

        return redirect('/agenda');
    }

    public function edit($id)
    {
        $evento = Agenda::find($id);

        return view('agenda.edit', ['evento' => $evento]);
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);

        $agenda->titulo = $request->titulo;
        $agenda->data = $request->data;
        $agenda->hora = $request->hora;
        $agenda->localizacao = $request->localizacao;
        $agenda->descricao = $request->descricao;

        $agenda->save();

        return redirect('/agenda/' . $id);
    }

    public function destroy($id)
    {
        $agenda = Agenda::find($id);

        $agenda->delete();

        return redirect('/agenda');
    }
}
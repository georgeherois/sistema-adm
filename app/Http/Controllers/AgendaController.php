<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Servico;

class AgendaController extends Controller
{
    public function index()
    {
        $eventos = Agenda::with('cliente','Servico')->get();
        $clientes = Cliente::all();
        $servicos = Servico::all();
        
        //dd($servicos);

       // return view('agenda.index', ['eventos' => $eventos], ['clientes' => $clientes], ['servicos' => $servicos] );
       return view('agenda.index', [
        'eventos' => $eventos,
        'clientes' => $clientes,
        'servicos' => $servicos
    ]);
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

    public function salvar(Request $request)
    {
        //dd($request);

        $agenda = new Agenda;

        $agenda->cliente_id = $request->user_id;
        $agenda->servico_id = $request->servico_id;
        //$agenda->servico_id->sync([$request->servico_id]);
        $agenda->data = $request->data_hora;
               
        $agenda->save();

        return redirect('/agenda');
    }

    public function agendaedit($id)
    {
        $evento = Agenda::with('cliente')->find($id);
        $clientes = Cliente::all();

        return view('agenda.edit', ['evento' => $evento], ['clientes' => $clientes]);
    }

    public function agendaUpdate(Request $request, $id)
    {
        $agenda = Agenda::find($id);

        $agenda->cliente_id = $request->user_id;
        $agenda->data = $request->data_hora;
               
        $agenda->save();

        return redirect('/agenda');
    }

    public function agendaDelete($id)
    {
        $agenda = Agenda::find($id);

        $agenda->delete();

        return redirect('/agenda');
    }
}
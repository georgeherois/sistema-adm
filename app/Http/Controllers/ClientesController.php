<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index()
    {
        
        $clientes = Cliente::all();

        return view('cliente.index',['clientes' => $clientes] );
    }

    public function cadastro()
    {
        //$evento = Cliente::find($id);

        return view('cliente.cadastro');
    }
    
    public function Salvar(Request $request)
    {
        //dd($request);

        $agenda = new Cliente;

        $agenda->cliente_id = $request->user_id;
        $agenda->data = $request->data_hora;
               
        $agenda->save();

        return redirect('/cliente');
    }

    public function agendaedit($id)
    {
                $clientes = Cliente::all();

        return view('agenda.edit', ['clientes' => $clientes]);
    }

    public function agendaUpdate(Request $request, $id)
    {
        $agenda = Cliente::find($id);

        $agenda->cliente_id = $request->user_id;
        $agenda->data = $request->data_hora;
               
        $agenda->save();

        return redirect('/cliente');
    }

    public function agendaDelete($id)
    {
        $agenda = Cliente::find($id);

        $agenda->delete();

        return redirect('/cliente');
    }


}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index()
    {
        
        $servicos = Servico::all();

        return view('servicos.index',['servicos' => $servicos] );
    }

    public function cadastro()
    {
        //$evento = Cliente::find($id);

        return view('servicos.cadastro');
    }
    
    public function salvar(Request $request)
    {
        //dd($request);

        $serviço = new Servico;

        $serviço-> nome = $request->nome;
        $serviço-> valor = $request->valor+".00";
        

        $serviço->save();

        return redirect('/servicos');
    }

    public function clienteEdit($id)
    {
        $cliente = Cliente::find($id);
        
        //dd($cliente);

        return view('cliente.edit', ['cliente' => $cliente]);
    }

    public function clienteUpdate(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente-> nome = $request->nome;
        $cliente-> nome = $request->cpf;
        $cliente-> email = $request->email;
        $cliente-> telefone = $request->telefone;
        $cliente-> endereco = $request->endereco;
        $cliente-> complemento = $request->complemento;
        $cliente-> cep = $request->cep;

               
        $cliente->save();

        return redirect('/cliente');
    }

    public function clienteDelete($id)
    {
        $cliente = Cliente::find($id);

        $cliente->delete();

        return redirect('/cliente');
    }


}

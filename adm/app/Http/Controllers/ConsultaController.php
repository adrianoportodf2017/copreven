<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index()
    {
        // código para listar consultas
        return view('admin.consultas.relatorio');

    }

    public function create()
    {
        // código para criar nova consulta
    }

    public function store(Request $request)
    {
        // código para armazenar nova consulta
    }

    public function show($id)
    {
        // código para mostrar uma consulta específica
    }

    public function edit($id)
    {
        // código para editar uma consulta específica
    }

    public function update(Request $request, $id)
    {
        // código para atualizar uma consulta específica
    }

    public function destroy($id)
    {
        // código para deletar uma consulta específica
    }

    public function hoje()
    {
        // código para listar consultas de hoje
        return view('consultas.hoje');
    }

    public function mes()
    {
        // código para listar consultas do mês
        return view('consultas.mes');
    }

    public function espera()
    {
        // código para listar consultas em espera
        return view('consultas.espera');
    }

    public function relatorio()
    {
        // código para gerar relatório de consultas
        echo 'teste';
        return view('admin.consultas.relatorio');
    }
}

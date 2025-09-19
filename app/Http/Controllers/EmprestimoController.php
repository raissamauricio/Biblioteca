<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function store(Request $request) {
        $emprestimo = Emprestimo::create([
            'data_empretimo' => $request -> data_empretimo,
            'data_devolucao' => $request -> data_devolucao,
            'codigo_membro' => $request -> codigo_membro,
            'codigo_livro' => $request -> codigo_livro
        ]);
        return response()->json($emprestimo);
    }

    public function delete($id) {
        $emprestimo = Emprestimo::find($id);
        
        if ($emprestimo == null) {
            return response()->json([
                'erro' => 'emprestimo não encontrado'
            ]);
       }

       $emprestimo->delete();

       return response()->json([
        'mensagem' => 'excluido'
       ]);
    }

    public function update() {
         return response()->json([
                'erro' => 'emprestimo não encontardo'
            ]);
        

        if (isset($request->data_empretimo)) {
            $emprestimo->data_empretimo = $request->data_empretimo;
        }

     
        if (isset($request->data_devolucao)) {
            $emprestimo->data_devolucao = $request->data_devolucao;
        }

       
        if (isset($request->codigo_membro)) {
            $emprestimo->codigo_membro = $request->codigo_membro;
        }

        $emprestimo->update();

        return response()->json([
            'mensagem' => 'atualizada'
        ]);
    }

    public function index() {}
}

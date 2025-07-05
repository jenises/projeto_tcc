<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Migracao;

class MigracaoController extends Controller {
    
    public function index() {

        $migracoes = Migracao::all();
        
        return view('migracao.migracao', [
            'migracoes' => $migracoes,
        ]);
    }

    public function novo() {
        return view('migracao.novo');
    }

    public function alterar(Migracao $migracao) {
        return view('migracao.alterar', compact('migracao'));
    }

    public function update(Migracao $migracao, Request $request) {
        $dados = $request->validate([
            'cliente' => 'required',
            'data_inicio_migracao' => 'required',
            'data_fim_migracao' => 'required',
            'data_inicio_implantacao' => 'required',
            'data_fim_implantacao' => 'required',
            'coordenador_projeto' => 'required',
        ]);
        $migracao->fill($dados);
        $migracao->save();

        return redirect()->route('migracao')->with('status', 'Migração alterada com sucesso!');
        
    }

    public function incluir(Request $request) {

        $dados = $request->validate([
            'cliente' => 'required',
            'data_inicio_migracao' => 'required',
            'data_fim_migracao' => 'required',
            'data_inicio_implantacao' => 'required',
            'data_fim_implantacao' => 'required',
            'coordenador_projeto' => 'required',
        ]);

       Migracao::create($dados);

       return redirect()->route('migracao')->with('status', 'Migração cadastrada com sucesso!');

    }
}

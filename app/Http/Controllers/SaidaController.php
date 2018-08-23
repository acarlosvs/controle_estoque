<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filial;
use App\Produto;
use App\Saida;

class SaidaController extends Controller
{
	public function index()
	{
		return view('saidas.lista');
	}

	public function formSaida()
	{
		$filiais = Filial::select('id', 'nome')->get();

		$produtos = Produto::select('id', 'nome')->where('status_id', 1)->get();

		return view('saidas.registrar', compact('filiais', 'produtos'));
	}

	public function registrar(Request $request)
	{
		try {
			$saida = new Saida();
			$produto = new Produto();
		    
			$dados = $request->all();

			$quantidade_post = $dados['quantidade'];

		   	$produto_buscado = Produto::find($dados['produto_id']);

			$qtd_produtos_total = $produto_buscado->quantidade_total;
			$qtd_produtos_reservados = $produto_buscado->quantidade_reservada;

			if ($qtd_produtos_reservados == null) {
				$qtd_produtos_reservados = 0;				
			}

			$qtd_produtos_disponivel = $qtd_produtos_total - $qtd_produtos_reservados;

			if ($quantidade_post > $qtd_produtos_disponivel) {
				return back()->with(['error' => "O estoque possui apenas $qtd_produtos =("]);
			} else {
				$produto_buscado = 
				dd($qtd_produtos_disponivel);
			}

			return back()->with(['success' => 'Cadastrado com sucesso!!!']);
		} catch (\Exception $e) {
			return back()->with(['error' => $e->getMessage()]);
		}
	}
}

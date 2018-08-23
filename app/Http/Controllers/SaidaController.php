<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filial;
use App\Produto;
use App\PedidoEstoque;

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
			$pedido = new PedidoEstoque();
			$produto = new Produto();
		    
			$dados = $request->all();

			$quantidade_post = $dados['quantidade'];

		   	$produto_buscado = Produto::find($dados['produto_id']);

		   	if ($dados['produto_id'] != $produto_buscado->filial_id) {
				return back()->with(['error' => "Produto pertence a outra filial!"]);
		   	}

			$qtd_produtos_total = $produto_buscado->quantidade_total;
			$qtd_produtos_reservados = $produto_buscado->quantidade_reservada;

			if ($qtd_produtos_reservados == null) {
				$qtd_produtos_reservados = 0;
			}

			$qtd_produtos_disponivel = $qtd_produtos_total - $qtd_produtos_reservados;

			if ($quantidade_post > $qtd_produtos_disponivel) {
				return back()->with(['error' => "O estoque possui apenas $qtd_produtos_total itens do produto disponíveis =("]);
			} else {
				if ($quantidade_post > $qtd_produtos_reservados) {
					$produto_buscado->quantidade_reservada = 0;
				} else {
		            $produto_buscado->quantidade_reservada = $qtd_produtos_reservados - $quantidade_post;
				}

	            $produto_buscado->quantidade_total = $qtd_produtos_total - $quantidade_post;
	            $produto_buscado->save();

	            $pedido->filial_id = $dados['filial_id'];
	            $pedido->save();
			}

			return back()->with(['success' => 'A saída foi registrada!!']);
		} catch (\Exception $e) {
			return back()->with(['error' => $e->getMessage()]);
		}
	}
}

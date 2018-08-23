<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filial;
use App\Produto;

class EstoqueController extends Controller
{
	public function index()
	{
		return view('estoque.lista');
	}

	public function formEstoque()
	{
        $filiais = Filial::select('id', 'nome')->get();

		return view('estoque.cadastro', compact('filiais'));
	}

	public function cadastrar(Request $request)
	{
		try {
			$dados = $request->all();

			$dados['status_id'] = 1;

			$produto = new Produto();

			$produto->create($dados);

			return back()->with(['success' => 'Cadastrado com sucesso!!!']);
		} catch (\Exception $e) {
			return back()->with(['error' => $e->getMessage()]);
		}
	}
}
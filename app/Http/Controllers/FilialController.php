<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filial;

class FilialController extends Controller
{
	public function index()
	{
		return view('filiais.lista');
	}

	public function formFilial()
	{
		return view('filiais.cadastro');
	}

	public function cadastrar(Request $request)
	{
		try {
			$dados = $request->all();

			$filial = new Filial();

			$filial->create($dados);

			return back()->with(['success' => 'Cadastrado com sucesso!!!']);
		} catch (\Exception $e) {
			return back()->with(['error' => $e->getMessage()]);
		}
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoEstoque extends Model
{
	protected $table = 'pedido_estoque';

	protected $fillable = [
		'created_at', 'updated_at', 'filial_id', 'produto_id'
	];
}
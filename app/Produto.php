<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'nome', 'quantidade_total', 'quantidade_reservada', 'status_id', 'filial_id'
	];
}
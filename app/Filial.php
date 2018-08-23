<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $table = 'filiais';

    public $timestamps = false;

	protected $fillable = [
		'nome', 'cnpj'
	];
}

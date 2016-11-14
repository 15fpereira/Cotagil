<?php

namespace cotagil;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
	public function getCategorias()
	{
		return $this
			->selectRaw('DISTINCT categorias.id,categorias.nome')
			->join('produtos', 'categorias.id', '=', 'id_categoria')
			->orderBy('categorias.id', 'ASC')
			->get();
	}
}

<?php

namespace cotagil;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{

    protected $fillable =
        [
            'nome'
        ];

    public $timestamps = false;

	public function getCategorias()
	{
		return $this
			->selectRaw('DISTINCT categorias.id,categorias.nome')
			->join('produtos', 'categorias.id', '=', 'categoria_id')
			->orderBy('categorias.id', 'ASC')
			->get();
	}
	public function produtos()
    {
        return $this->hasMany('App\Produtos');
    }
}

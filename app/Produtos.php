<?php

namespace cotagil;

use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable =
        [
        'categoria_id', 'nome', 'descricao'
        ];

	use Searchable;

	public function searchableAs()
    {
        return 'produtos';
    }

    public function categoria()
    {
    	$this->belongsTo('cotagil\Categorias');
    }

    public function cotacao()
    {
    	$this->hasMany('cotagil\Cotacao');
    }
}

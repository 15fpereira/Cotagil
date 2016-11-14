<?php

namespace cotagil;

use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
	use Searchable;

	public function searchableAs()
    {
        return 'produtos';
    }

    public function enderecos()
    {
    	$this->hasMany('cotagil\Enderecos');
    }
}

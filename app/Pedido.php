<?php

namespace cotagil;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function detalhes()
    {
    	return $this->hasMany('cotagil\ProdutoDetalhes');
    }

    public function cotacoes()
    {
        return $this->hasMany('cotagil\Cotacao');
    }

    public function user()
    {
        return $this->belongsTo('cotagil\User');
    }
}

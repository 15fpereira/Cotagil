<?php

namespace cotagil;

use Illuminate\Database\Eloquent\Model;

class PedidoDetalhes extends Model
{
    public function produto()
    {
    	return $this->belongsTo('cotagil\Produtos');
    }
}

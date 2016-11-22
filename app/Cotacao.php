<?php

namespace cotagil;

use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{

    public function users(){
        return $this->belongsToMany('cotagil\User')
            ->withPivot('preco','marca','prazo')->withTimestamps();
    }

    public function pedidos()
    {
        return $this->belongsTo('cotagil\Pedido');

    }
    public function produto()
    {
        return $this->belongsTo('cotagil\Produtos');
    }
}

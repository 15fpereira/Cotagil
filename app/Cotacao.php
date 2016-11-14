<?php

namespace cotagil;

use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{

    public function users(){
        return $this->belongsToMany('cotagil\User',
            'cotacao_user')
            ->withPivot('produto')->withTimestamps();
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

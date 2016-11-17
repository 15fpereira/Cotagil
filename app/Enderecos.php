<?php

namespace cotagil;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('cotagil\User');
    }
}

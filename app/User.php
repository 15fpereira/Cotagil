<?php

namespace cotagil;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
        'perfil', 'condominio',
        'nomefantazia',
        //'documento',

        //'telefone',
        'password',
    ];

//'perfil' => $data['perfil'],
//'documento' => $data['documento'],
//'condominio' => $data['condominio'],
//'telefone' => $data['telefone'],
//'password' => bcrypt($data['password']),

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enderecos()
    {
        return $this->hasMany('cotagil\Enderecos');
    }
    public function pedidos()
    {
        return $this->hasMany('cotagil\Pedido');
    }

    public function cotacoes()
    {
        return $this->belongsToMany('cotagil\Cotacao')
            ->withPivot('id','preco','marca','prazo','status')->withTimestamps();
    }
}

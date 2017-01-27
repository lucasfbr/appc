<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ddd', 'fone', 'celular', 'estado', 'cidade', 'bairro', 'endereco', 'numero', 'profissao', 'empresa', 'sexo', 'foto', 'educacao', 'habilidades', 'notas',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['created_at', 'updated_at'];

    function getCreatedAtAttribute($data)
    {

        $data = Carbon::parse($data);

        return $data->format('d/m/Y');
    }

}

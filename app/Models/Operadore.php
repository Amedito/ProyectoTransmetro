<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Operadore
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $serie_pc
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Operadore extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'serie_pc'];

    public function estacion()
    {
        return $this->hasMany('App\Models\Estacione', 'id_operador', 'id');
    }



}

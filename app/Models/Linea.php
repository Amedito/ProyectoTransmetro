<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Linea
 *
 * @property $id
 * @property $id_municipalidad
 * @property $nombre
 * @property $zona
 * @property $distancia_total_km
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Linea extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_municipalidad', 'nombre', 'zona', 'distancia_total_km'];

    public function municipalidad(){
        return $this->belongsTo('App\Models\Municipalidade', 'id_municipalidad', 'id');
    }

    public function autobus(){
        return $this->hasMany('App\Models\Autobus', 'id_linea', 'id');
    }

    public function estacionLinea(){
        return $this->hasMany('App\Models\EstacionesLinea', 'id_linea', 'id');
    }


}

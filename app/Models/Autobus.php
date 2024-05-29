<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autobus
 *
 * @property $id
 * @property $id_linea
 * @property $id_piloto
 * @property $id_parqueo
 * @property $marca
 * @property $modelo
 * @property $placa
 * @property $capacidad_maxima
 * @property $tiempo_espera_adicional_minutos
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autobus extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_linea', 'id_piloto', 'id_parqueo', 'marca', 'modelo', 'placa', 'capacidad_maxima', 'tiempo_espera_adicional_minutos'];

    public function linea(){
        return $this->belongsTo('App\Models\Linea', 'id_linea', 'id');
    }

    public function piloto(){
        return $this->belongsTo('App\Models\Piloto', 'id_piloto', 'id');
    }

    public function parqueo(){
        return $this->belongsTo('App\Models\Parqueo', 'id_parqueo', 'id');
    }



}

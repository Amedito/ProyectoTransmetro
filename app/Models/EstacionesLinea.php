<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstacionesLinea
 *
 * @property $id
 * @property $id_linea
 * @property $id_estacion
 * @property $orden
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstacionesLinea extends Model
{
    protected $table = 'estaciones_linea';
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_linea', 'id_estacion', 'orden'];

    public function estacion(){
        return $this->belongsTo('App\Models\Estacione', 'id_estacion', 'id');
    }

    public function linea(){
        return $this->belongsTo('App\Models\Linea', 'id_linea', 'id');
    }


}

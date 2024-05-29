<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estacione
 *
 * @property $id
 * @property $id_municipalidad
 * @property $id_operador
 * @property $id_guardia
 * @property $nombre
 * @property $direccion
 * @property $capacidad_actual
 * @property $alerta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estacione extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_municipalidad', 'id_operador', 'id_guardia', 'nombre', 'direccion', 'capacidad_actual', 'alerta'];

    public function municipalidad(){
        return $this->belongsTo('App\Models\Municipalidade', 'id_municipalidad', 'id');
    }

    public function operador(){
        return $this->belongsTo('App\Models\Operadore', 'id_operador', 'id');
    }

    public function guardia(){
        return $this->belongsTo('App\Models\GuardiasSeguridad', 'id_guardia', 'id');
    }

    public function estacionLinea(){
        return $this->hasMany('App\Models\EstacionesLinea', 'id_estacion', 'id');
    }

}

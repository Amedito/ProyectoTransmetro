<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DireccionResidencium
 *
 * @property $id
 * @property $id_piloto
 * @property $direccion
 * @property $ciudad
 * @property $codigo_postal
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DireccionResidencium extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_piloto', 'direccion', 'ciudad', 'codigo_postal'];

    
    public function piloto()
    {
        return $this->belongsTo('App\Models\Piloto', 'id_piloto', 'id');
    }

}

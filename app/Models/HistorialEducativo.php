<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialEducativo
 *
 * @property $id
 * @property $id_piloto
 * @property $nivel_educativo
 * @property $institucion
 * @property $año_graduacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialEducativo extends Model
{
    protected $table = 'historialeducativo';


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_piloto', 'nivel_educativo', 'institucion', 'año_graduacion'];

    // Relación con el modelo Piloto
    public function piloto()
    {
        return $this->belongsTo('App\Models\Piloto', 'id_piloto', 'id');
    }



}

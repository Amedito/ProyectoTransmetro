<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GuardiasSeguridad
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GuardiasSeguridad extends Model
{
    protected $table = 'guardias_seguridad';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'edad'];

    public function estacion()
    {
        return $this->hasMany('App\Models\Estacione', 'id_estacion', 'id');
    }

    



}

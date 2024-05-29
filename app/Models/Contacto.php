<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $id_piloto
 * @property $telefono
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contacto extends Model
{
    // Especificar el nombre de la tabla si no sigue la convención de nombres de Laravel
    protected $table = 'contacto';


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_piloto', 'telefono', 'correo'];

    public function piloto()
    {
        return $this->belongsTo('App\Models\Piloto', 'id_piloto', 'id');
    }
}

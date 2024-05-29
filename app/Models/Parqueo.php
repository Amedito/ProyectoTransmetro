<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parqueo
 *
 * @property $id
 * @property $numero
 * @property $nombre
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parqueo extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero', 'nombre', 'direccion'];

    public function autobus(){
        return $this->hasMany('App\Models\Autobus', 'id_parqueo', 'id');
    }



}

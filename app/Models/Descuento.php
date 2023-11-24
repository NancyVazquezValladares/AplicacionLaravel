<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Descuento
 *
 * @property $id
 * @property $Porcentaje
 * @property $id_Producto
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Descuento extends Model
{
    
    static $rules = [
		'Porcentaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Porcentaje','id_Producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_Producto');
    }
    

}

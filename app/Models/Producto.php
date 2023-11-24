<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Descripcion
 * @property $Precio
 * @property $Stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Descuento[] $descuentos
 * @property Marca[] $marcas
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'Descripcion' => 'required',
		'Precio' => 'required',
		'Stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Precio','Stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function descuentos()
    {
        return $this->hasMany('App\Models\Descuento', 'id_Producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marcas()
    {
        return $this->hasMany('App\Models\Marca', 'id_Producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'id_Producto', 'id');
    }
    

}

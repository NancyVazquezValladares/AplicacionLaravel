<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Nombre_Cliente
 * @property $Telefono
 * @property $Correo_Cliente
 * @property $Direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleVenta[] $detalleVentas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Nombre_Cliente' => 'required',
		'Telefono' => 'required',
		'Correo_Cliente' => 'required',
		'Direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_Cliente','Telefono','Correo_Cliente','Direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleVentas()
    {
        return $this->hasMany('App\Models\DetalleVenta', 'id_Cliente', 'id');
    }
    

}

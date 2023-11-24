<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleVenta
 *
 * @property $id
 * @property $Producto
 * @property $Precio
 * @property $Total
 * @property $Monto
 * @property $Resto
 * @property $id_Venta
 * @property $id_Cliente
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleVenta extends Model
{
    
    static $rules = [
		'Producto' => 'required',
		'Precio' => 'required',
		'Total' => 'required',
		'Monto' => 'required',
		'Resto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Producto','Precio','Total','Monto','Resto','id_Venta','id_Cliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_Cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'id_Venta');
    }
    

}

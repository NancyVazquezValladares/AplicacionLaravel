<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Producto');
            $table->double('Precio',10,2);
            $table->double('Total',10,2);
            $table->double('Monto',10,2);
            $table->double('Resto',10,2);
            $table->foreignId('id_Venta')->nullable()->constrained('ventas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_Cliente')->nullable()->constrained('clientes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};

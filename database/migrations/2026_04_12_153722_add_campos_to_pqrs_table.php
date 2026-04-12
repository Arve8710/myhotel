<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pqrs', function (Blueprint $table) {
            $table->enum('nacionalidad', ['Nacional', 'Extranjero'])->nullable()->after('correo');
            $table->enum('tipo_documento', ['Cédula', 'Pasaporte', 'Visa'])->nullable()->after('nacionalidad');
            $table->string('numero_documento')->nullable()->after('tipo_documento');
            $table->enum('tipo_pago', ['Efectivo', 'Tarjeta Crédito', 'Tarjeta Débito', 'Transferencia'])->nullable()->after('numero_documento');
        });
    }

    public function down(): void
    {
        Schema::table('pqrs', function (Blueprint $table) {
            $table->dropColumn(['nacionalidad', 'tipo_documento', 'numero_documento', 'tipo_pago']);
        });
    }
};
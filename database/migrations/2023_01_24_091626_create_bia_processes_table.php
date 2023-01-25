<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bia_processes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('alcance');
            $table->foreignId('estado_id')->constrained('bia_estados')->default(1);
            $table->boolean('status')->default(true);
            $table->date('fecha_inicio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bia_processes');
    }
};

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
        Schema::create('risks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bia_id')->constrained('bia_processes');
            $table->string('code',50)->unique();
            $table->string('description',1000);
            $table->foreignId('source_id')->constrained('sources');
            $table->text('consecuences');
            //$table->foreignId('risk_owner_id')->constrained('departments');  ESTO SE CAMBIARÁ POR LA RELACION DE MUCHOS A MUCHOS
            $table->string('existing_controls',1000);
            $table->integer('probability');
            $table->integer('impact');
            $table->integer('risk_level');
            $table->boolean('is_aceptable');
            $table->foreignId('treatment_option_id')->constrained('treatment_options');
            $table->text('treatment_plan')->nullable();
            $table->string('responsable',500)->nullable();
            $table->string('resources',500)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->foreignId('status_id')->nullable()->constrained('status_risks');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('risks');
    }
};

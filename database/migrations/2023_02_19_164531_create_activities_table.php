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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name',500);
            $table->float('total_score');
            $table->boolean('is_critical')->default(false);
            $table->string('justificacion',500);
            $table->string('mtpd',50)->nullable();
            $table->string('rto',50)->nullable();
            $table->string('rpo',50)->nullable();
            $table->string('aceptable_minimun',50)->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('other_proc_depen')->nullable();
            $table->string('processes',500)->nullable();
            $table->string('criticial_periods',500)->nullable();
            $table->string('procedure',500)->nullable();
            $table->string('normal_op_people',500)->nullable();
            $table->string('people_required',100)->nullable();
            $table->string('applications',500)->nullable();
            $table->string('equiptment',500)->nullable();
            $table->string('services',500)->nullable();
            $table->string('physical_space',500)->nullable();
            $table->string('people',500)->nullable();
            $table->string('skills',500)->nullable();
            $table->string('providers',500)->nullable();
            $table->string('other_resources',500)->nullable();
            $table->foreignId('critic_product_id')->constrained('product_score_averages');
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
        Schema::dropIfExists('activities');
    }
};

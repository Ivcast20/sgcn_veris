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
        Schema::create('parameter_scores', function (Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->foreignId('product_score_id')->constrained('product_scores');
            $table->foreignId('parameter_id')->constrained('parameters');
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
        Schema::dropIfExists('parameter_scores');
    }
};

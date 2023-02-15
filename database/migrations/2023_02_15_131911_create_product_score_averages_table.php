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
        Schema::create('product_score_averages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bia_process_id')->constrained('bia_processes');
            $table->foreignId('product_id')->constrained('products');
            $table->float('total_score');
            $table->boolean('is_critical');
            $table->foreignId('user_asigned')->nullable()->constrained('users');
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
        Schema::dropIfExists('product_score_averages');
    }
};

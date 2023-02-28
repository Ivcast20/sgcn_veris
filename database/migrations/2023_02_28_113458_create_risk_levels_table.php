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
        Schema::create('risk_levels', function (Blueprint $table) {
            $table->id();
            $table->string('range', 50);
            $table->string('clasification', 50);
            $table->string('description', 1000);
            $table->boolean('status')->default(true);
            $table->unique(['range','clasification']);
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
        Schema::dropIfExists('risk_levels');
    }
};

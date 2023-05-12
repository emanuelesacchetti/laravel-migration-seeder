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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 30);
            $table->string('Stazione_di_partenza', 50);
            $table->string('Stazione_di_arrivo', 50);
            $table->timeTz('Orario_di_partenza', $precision = 0);
            $table->timeTz('Orario_di_arrivo', $precision = 0);
            $table->boolean('In_orario', 30);
            $table->boolean('Cancellato', 30);
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
        Schema::dropIfExists('trains');
    }
};

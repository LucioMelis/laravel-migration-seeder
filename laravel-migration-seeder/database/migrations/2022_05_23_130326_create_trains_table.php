<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->timestamps();
            // $table->char('azienda');
            // $table->char('stazione_di_partenza');
            // $table->char('stazione_di_arrivo');
            // $table->datetime('orario_di_partenza')->nullable($value = true);
            // $table->datetime('orario_di_arrivo')->nullable($value = true);
            // $table->string('codice_treno');
            // $table->tinyInteger('numero_carrozze');
            // $table->boolean('in_orario');
            // $table->boolean('cancellato');
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
}

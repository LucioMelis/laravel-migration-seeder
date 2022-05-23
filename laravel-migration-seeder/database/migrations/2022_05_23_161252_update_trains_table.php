<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda',40);
            $table->string('stazione_di_partenza',40);
            $table->string('stazione_di_arrivo',40);
            $table->datetime('orario_di_partenza')->nullable($value = true);
            $table->datetime('orario_di_arrivo')->nullable($value = true);
            $table->string('codice_treno',20);
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_di_partenza');
            $table->dropColumn('stazione_di_arrivo');
            $table->dropColumn('orario_di_partenza');
            $table->dropColumn('orario_di_arrivo');
            $table->dropColumn('codice_treno');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');
        });
    }
}

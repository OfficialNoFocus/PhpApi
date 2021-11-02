<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->decimal('prijs', 8, 2);
            $table->string('regio');
            $table->string('beschrijving', 750);
            $table->string('wijngebied');
            $table->string('wijnhuis');
            $table->string('druivensoort');
            $table->string('categorie');
            $table->string('inhoud');
            $table->string('serveren_op');
            $table->string('ook_lekker_bij');
            $table->string('wijn_afbeelding')->nullable();
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
        Schema::dropIfExists('wines');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcchivementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acchivements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date'); //year of achivements
            $table->string('name'); //name of achivements
            $table->string('description'); //description of achivements
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
        Schema::dropIfExists('acchivements');
    }
}

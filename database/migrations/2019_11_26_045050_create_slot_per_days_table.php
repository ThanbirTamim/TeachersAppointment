<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotPerDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_per_days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day')->nullable();
            $table->string('slot1')->nullable();
            $table->string('slot2')->nullable();
            $table->string('slot3')->nullable();
            $table->string('slot4')->nullable();
            $table->string('slot5')->nullable();
            $table->string('slot6')->nullable();
            $table->string('slot7')->nullable();
            $table->string('slot8')->nullable();
            $table->string('slot9')->nullable();
            $table->string('slot10')->nullable();
            $table->string('slot11')->nullable();
            $table->string('slot12')->nullable();
            $table->string('slot13')->nullable();
            $table->string('slot14')->nullable();
            $table->string('slot15')->nullable();
            $table->string('slot16')->nullable();
            $table->string('slot17')->nullable();
            $table->string('slot18')->nullable();
            $table->string('slot19')->nullable();
            $table->string('slot20')->nullable();
            $table->string('slot21')->nullable();
            $table->string('slot22')->nullable();
            $table->string('slot23')->nullable();
            $table->string('slot24')->nullable();
            $table->string('slot25')->nullable();
            $table->string('slot26')->nullable();
            $table->string('slot27')->nullable();
            $table->string('slot28')->nullable();
            $table->string('slot29')->nullable();
            $table->string('slot30')->nullable();
            $table->string('slot31')->nullable();
            $table->string('slot32')->nullable();
            $table->string('slot33')->nullable();
            $table->string('slot34')->nullable();
            $table->string('slot35')->nullable();
            $table->string('slot36')->nullable();
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
        Schema::dropIfExists('slot_per_days');
    }
}

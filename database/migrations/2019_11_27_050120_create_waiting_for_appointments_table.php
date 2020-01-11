<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaitingForAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waiting_for_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('std_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('problem');
            $table->string('slot')->unique();
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
        Schema::dropIfExists('waiting_for_appointments');
    }
}

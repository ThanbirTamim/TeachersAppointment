<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentRequestApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_request_approves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('student_id');
            $table->string('phone');
            $table->string('email');
            $table->string('department');
            $table->string('problem');
            $table->string('file1');//picture of appointmenter
            $table->string('day');
            $table->string('slot');
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
        Schema::dropIfExists('appointment_request_approves');
    }
}

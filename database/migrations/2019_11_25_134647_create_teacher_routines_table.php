<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day');
            $table->string('period1')->nullable();
            $table->string('period2')->nullable();
            $table->string('period3')->nullable();
            $table->string('period4')->nullable();
            $table->string('period5')->nullable();
            $table->string('period6')->nullable();
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
        Schema::dropIfExists('teacher_routines');
    }
}

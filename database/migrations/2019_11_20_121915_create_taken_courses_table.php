<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakenCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taken_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_type');//BSC or MSC
            $table->string('course_code');
            $table->string('course_title');
            $table->string('course_description');
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
        Schema::dropIfExists('taken_courses');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinThesisProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_thesis_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');//student id
            $table->string('name');//student name
            $table->string('email');//student email
            $table->string('course_type');//bsc or msc
            $table->string('pt_title');//project or thesis title which he or she was taken
            $table->string('start_time');//project or thesis title which he or she was taken
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
        Schema::dropIfExists('join_thesis_projects');
    }
}

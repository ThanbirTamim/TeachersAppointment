<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecentProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('members');//members of project
            $table->string('type');//type of project or thesis
            $table->string('description');//description of project
            $table->string('start_time');//initial time of project
            $table->string('finish_time');//finish time of project
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
        Schema::dropIfExists('recent_projects');
    }
}

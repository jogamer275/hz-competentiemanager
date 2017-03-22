<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCompetenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_competency', function (Blueprint $table) {
         $table->integer ('user_id')->unsigned();
         $table->integer ('competency_id')->unsigned();
         $table->foreign('user_id')->references('id')->on('users');
         $table->foreign('competency_id')->references('id')->on('competency');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_competencies');
    }
}

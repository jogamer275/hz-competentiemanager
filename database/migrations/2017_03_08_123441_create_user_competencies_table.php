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
    Schema::enableForeignKeyConstraints();
    public function up()
    {
        Schema::create('user_competencies', function (Blueprint $table) {
         $table->increments('id');
         $table->foreign ('user_id');
                ->references('id')->on('users')
                ->onDelete('cascade');
         $table->foreign ('competency_id');
                ->references('id')->on('competency')
                ->onDelete('cascade');
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
        Schema::drop('user_competencies');
    }
     Schema::disableForeignKeyConstraints();
}

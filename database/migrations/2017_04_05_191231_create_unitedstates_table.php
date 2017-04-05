<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitedstatesTable extends Migration
{
    // /**
    //  * Run the migrations.
    //  *
    //  * @return void
    //  */
    public function up()
    {
      Schema::create('countrys', function (Blueprint $table) {
      $table->increments('id');
      $table->string('city');
      $table->string('state');
      $table->integer('year');
      $table->integer('duration');
      $table->timestamps();
    });
    }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    public function down()
    {
      Schema::dropIfExists('countrys');
    }
}

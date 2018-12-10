<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reports', function (Blueprint $table) {
          $table->increments('id');
          $table->text('reportTitle');
          $table->text('reportDescription');
          $table->string('file_url');
          $table->string('tenure_from');
          $table->string('tenure_to');
          $table->integer('city')->unsigned();
          $table->foreign('city')->references('id')->on('cities');
          $table->string('tenure_year');
          $table->string('user_id');
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
        Schema::dropIfExists('reports');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_requests', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->text('subject');
          $table->text('class');
          $table->text('teacher');
          $table->text('details');
          $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('new_requests');
    }
}

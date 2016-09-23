<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('record');
            $table->string('ip');
            $table->text('description');
            $table->timestamps();
        });
        Schema::create('ports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('port');
            $table->unsignedInteger('node_id');
            $table->string('encryption');
            $table->text('password');
            $table->text('uri');
            $table->text('img');
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
        Schema::drop('ports');
        Schema::drop('nodes');
    }
}

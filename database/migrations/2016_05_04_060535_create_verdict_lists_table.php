<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerdictListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verdict_lists', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('status')->default(0);
            $table->integer('enabled')->default(1);
            $table->integer('user_id')->unsigned();
            $table->integer('pending_lists_id')->unsigned();
            $table->string('comment')->default('');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pending_lists_id')->references('id')->on('pending_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('verdict_lists');
    }
}

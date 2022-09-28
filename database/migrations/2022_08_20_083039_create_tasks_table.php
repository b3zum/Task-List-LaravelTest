<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {



        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            /*$table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'b3zum')->references('id')->on('users')->onDelete('cascade');*/
            $table->timestamps();
            $table->integer('user_id')->unsigned()->index();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};

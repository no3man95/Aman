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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

        $table->integer('user_id')->unsigned();
        //rest of fields then...

            $table->string('image');
            $table->string('title');
            $table->text('details');
            $table->integer('price');


            $table->boolean('confirm');

            $table->timestamps();
        });

//         Schema::table('products', function($table) {
//        $table->foreign('user_id')->references('id')->on('users');
//    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

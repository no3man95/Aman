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
        Schema::create('installments', function (Blueprint $table) {
            $table->id();





        $table->integer('product_id')->unsigned();
        //rest of fields then...
        $table->foreign('product_id')->references('id')->on('products');


        $table->integer('user_id')->unsigned();
        //rest of fields then...
        $table->foreign('user_id')->references('id')->on('users');

        $table->intger('amount');




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
        Schema::dropIfExists('installments');
    }
};

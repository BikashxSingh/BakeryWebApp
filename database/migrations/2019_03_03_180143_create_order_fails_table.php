<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderFailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_fails', function (Blueprint $table) {
            $table->bigIncrements('id_order');
            $table->integer('id_cake');	
            $table->string('fname',20);
            $table->string('lname',20);
            $table->string('phone',15);
            $table->string('size',10);
            $table->string('email',40)->nullable();
            $table->string('pickupType');
            $table->string('address',40)->nullable();
            $table->string('remark',80)->nullable();
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
        Schema::dropIfExists('order_fails');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no')->unique()->default('');
            $table->decimal('order_amount');
            $table->string('order_title')->default('');
            $table->dateTime('order_time');
            $table->string('order_source')->default('');
            $table->string('order_name')->default('');
            $table->string('order_indentify')->default('');
            $table->integer('order_adult');
            $table->integer('order_child');
            $table->date('travel_date');
            $table->string('status')->default('');
            $table->string('website')->default('');
            $table->timestamps();
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
        Schema::dropIfExists('user_orders');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSetMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_set_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('');
            $table->decimal('orignal_price');
            $table->decimal('current_price');
            $table->decimal('child_price');
            $table->text('description');
            $table->integer('amount');
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
        Schema::dropIfExists('user_set_menu');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupermarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supermarkets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_group_id');
            $table->string('item');
            $table->string('description');
            $table->string('price');
            $table->string('photo');
            $table->string('discount')->nullable();
            $table->string('new_price')->nullable();
            $table->foreignId('created_by');
            $table->enum('status',['active','out of stock','delivered'])->default('active');
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
        Schema::dropIfExists('supermarkets');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('created_by');
            $table->string('photo');
            $table->string('equipment');
            $table->string('price');
            $table->string('description');
            $table->string('quantity');
            $table->string('discount_amount')->nullable();
            $table->string('equipment_discount')->nullable();
            $table->enum('status',['active','taken','out of stock'])->default('active');
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
        Schema::dropIfExists('equipment');
    }
}

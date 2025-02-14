<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->foreignId('owner')->constrained('users')->onDelete('cascade');
            $table->string('plat')->primary();
            $table->enum('type', ['car', 'bike','bicycle','van']);
            $table->string('brand');
            $table->string('model');
            $table->string('insurance');
            $table->integer('age');
            $table->integer('passanger');
            $table->integer('door');
            $table->integer('luggage');
            $table->double('gallon');
            $table->double('rent');
            $table->boolean('list');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}

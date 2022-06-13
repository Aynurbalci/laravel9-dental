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
        Schema::create('processes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');

            $table->string('name',20);
            $table->string('email',50);
            $table->string('phone',20);
            $table->string('adress',200);
            $table->float('total');
            $table->string('IP',20);
            $table->string('note',150)->nullable();
            $table->string('status',30)->default('New');
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
        Schema::dropIfExists('processes');
    }
};

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
        Schema::create('randevus', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('treatment_id');
            $table->integer('quantity');
            $table->integer('dentist_id');
            $table->string('IP',20)->nullable();
            $table->string('note',100)->nullable();
            $table->string("status",10)->nullable()->default("New");
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
        Schema::dropIfExists('randevus');
    }
};

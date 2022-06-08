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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("treatment_id");
            $table->string('date',20);
            $table->string('time',20);
            $table->string('IP',20)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('review',)->nullable();
            $table->integer('rate')->default(0);
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
        Schema::dropIfExists('comments');
    }
};

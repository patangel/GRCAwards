<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards_criterias', function (Blueprint $table) {
            $table->id();
            //  $table->foreign('judging_id')->references('id')->on('judgings')->onDelete('cascade')->nullable();
            // $table->foreignId('judging_id')->constrained()->nullable();
            $table->foreignId('judgings_id')->references('id')->on('judgings')->nullable();
            $table->string('criteria')->nullable();
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
        Schema::dropIfExists('awards_criterias');
    }
}

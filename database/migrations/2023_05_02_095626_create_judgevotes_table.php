<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgevotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judgevotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('award_program_id')->references('id')->on('award_programs')->onDelete('cascade');
            $table->unsignedBigInteger('award_id')->references('id')->on('awards')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('judges_id')->references('id')->on('judges')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('nominee_id')->references('id')->on('nominees')->onDelete('cascade')->nullable();
            $table->timestamps();
        });

        $votes = [
            [
                'award_program_id' => '2', 
                'award_id'=> '44', 
                'judges_id' => '10',
                'nominee_id'=>'241'
            ]
        ];

         foreach ($votes as $vote){
            DB::table('judgevotes')->insert($vote);
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judgevotes');
    }
}

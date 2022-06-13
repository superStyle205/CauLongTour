<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            // ma tran dau
            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')
                    ->references('id')
                    ->on('matches');

            // van dong vien
            $table->unsignedBigInteger('athlete_id');
            $table->foreign('athlete_id')
                    ->references('id')
                    ->on('athletes');

            // thuoc doi so may trong tran
            $table->integer('team')
                    ->default(0);

            // ket qua van 1
            $table->integer('result_set_1')
                    ->default(0);

            // ket qua van 2
            $table->integer('result_set_2')
                    ->default(0);

            // ket qua van 3
            $table->integer('result_set_3')
                    ->default(0);

            // $table->timestamp('created_at')
            //         ->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamp('updated_at')
            //         ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('match_details');
    }
}

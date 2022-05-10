<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // ma the loai tran dau
            $table->unsignedBigInteger('form_id');
            $table->foreign('form_id')
                    ->references('id')
                    ->on('forms');

            // ma vong dau
            $table->unsignedBigInteger('round_id');
            $table->foreign('round_id')
                    ->references('id')
                    ->on('rounds');

            // van dong vien 1
            $table->unsignedBigInteger('athlete1');
            $table->foreign('athlete1')
                    ->references('id')
                    ->on('athletes');

            // van dong vien 2
            $table->unsignedBigInteger('athlete2');
            $table->foreign('athlete2')
                    ->references('id')
                    ->on('athletes');

            // nguoi thang
            $table->unsignedBigInteger('athlete_win');
            $table->foreign('athlete_win')
                    ->references('id')
                    ->on('athletes');

            // ket qua van 1
            $table->string('result_set_1', 10);

            // ket qua van 2
            $table->string('result_set_2', 10);

            // ket qua van 3
            $table->string('result_set_3', 10);

            // ngay to chuc du kien
            $table->dateTime('plan_start');

            // ngay to chuc thuc te
            $table->dateTime('plant_actual');


            $table->timestamp('created_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}

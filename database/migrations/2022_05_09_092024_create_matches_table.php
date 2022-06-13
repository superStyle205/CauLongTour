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
            
            // ma the giai dau
            $table->unsignedBigInteger('tournament_id');
            $table->foreign('tournament_id')
                    ->references('id')
                    ->on('tournaments');

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

            // match parent - use for referene match parent
            $table->unsignedBigInteger('match_parent_id')
                    ->nullable();

            // group - use for referene match parent
            $table->string('group')
                    ->nullable();

            // ngay to chuc du kien
            $table->dateTime('plan_start')
                    ->nullable();

            // ngay to chuc thuc te
            $table->dateTime('plant_actual')
                    ->nullable();


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
        Schema::dropIfExists('matches');
    }
}

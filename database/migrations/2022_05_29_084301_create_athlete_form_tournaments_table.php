<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthleteFormTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_form_tournaments', function (Blueprint $table) {
            // ma giai dau
            $table->unsignedBigInteger('tournament_id');
            $table->foreign('tournament_id')
                    ->references('id')
                    ->on('tournaments');

            // ma the loai
            $table->unsignedBigInteger('form_id');
            $table->foreign('form_id')
                    ->references('id')
                    ->on('forms');

            // van dong vien
            $table->unsignedBigInteger('athlete_id');
            $table->foreign('athlete_id')
                    ->references('id')
                    ->on('athletes');

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
        Schema::dropIfExists('athlete_form_tournaments');
    }
}

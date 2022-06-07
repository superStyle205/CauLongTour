<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthleteTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_tournament', function (Blueprint $table) {
            // ma giai dau
            $table->unsignedBigInteger('tournament_id');
            $table->foreign('tournament_id')
                    ->references('id')
                    ->on('tournaments');

            // van dong vien
            $table->unsignedBigInteger('athlete_id');
            $table->foreign('athlete_id')
                    ->references('id')
                    ->on('athletes');

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
        Schema::dropIfExists('athlete_tournament');
    }
}

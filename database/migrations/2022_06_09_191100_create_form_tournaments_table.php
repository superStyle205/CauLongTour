<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_tournaments', function (Blueprint $table) {
            $table->bigIncrements('id');

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

            // so luong van dong vien
            $table->integer('total_athlete')
                    ->default(0);

            $table->timestamp('created_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

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
        Schema::dropIfExists('form_tournaments');
    }
}

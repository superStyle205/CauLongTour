<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * a part of competition was stored. 
         */
        Schema::create('rounds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 20)
                    ->nullable(false);

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
        Schema::dropIfExists('rounds');
    }
}

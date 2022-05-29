<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            /**
             * crate table where is stored information of the badminton players (name, age, gender,..)
             */
        Schema::create('athletes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 100);

            $table->date('age');

            $table->binary('gender');

            $table->string('address', 500);
            
            $table->string('unit', 100);

            $table->string('note', 500);

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
        Schema::dropIfExists('athletes');
    }
}

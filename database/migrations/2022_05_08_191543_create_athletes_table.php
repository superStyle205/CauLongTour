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

            $table->string('name', 100)
                    ->nullable(false);

            $table->date('age')
                    ->nullable(false);

            $table->boolean('gender')
                    ->nullable(false);

            $table->string('address', 500)
                    ->nullable();
            
            $table->string('unit', 100)
                    ->nullable(false);

            $table->string('note', 500)
                    ->nullable();

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
        Schema::dropIfExists('athletes');
    }
}

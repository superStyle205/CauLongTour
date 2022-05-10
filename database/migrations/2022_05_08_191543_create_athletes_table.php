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
        Schema::create('athletes', function (Blueprint $table) {
            $table->bigIncrements('id');

            // ten van dong vien
            $table->string('name', 100);

            // tuoi
            $table->date('old')
                    ->nullable($value = false);

            // gioi tinh
            $table->binary('gender')
                    ->nullable($value = false);

            // dia chi
            $table->string('address', 500);
            
            // ten don vi
            $table->string('unit', 100)
                    ->nullable($value = false);;

            // ghi chu thong tin
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

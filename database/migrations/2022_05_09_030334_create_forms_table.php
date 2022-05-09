<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');

            // ten hinh thuc thi dau
            $table->string('name', 30)
                    ->nullable($value = false);

            // do tuoi
            $table->string('range_old', 30)
                    ->nullable($value = false);                     

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
        Schema::dropIfExists('forms');
    }
}

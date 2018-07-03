<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('sci_class');
          $table->string('inventor', 100);
          $table->date('invented');
          $table->integer('harvest');
          $table->enum("pizza_comp", ['yes', 'no']);
          $table->enum('modified', ['yes', 'no']);
          $table->float('freshness');
          $table->float('min', 8, 2);
          $table->float('max', 8, 2);
          $table->text('notes');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}

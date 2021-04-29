<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceclients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id');
            $table->foreignId('client_id');
            $table->integer('prioritynum');
            $table->boolean('served');
            $table->time('service_in')->nullable();
            $table->time('service_out')->nullable();
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('serviceclients');
    }
}

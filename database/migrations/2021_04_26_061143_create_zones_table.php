<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonesTable extends Migration
{
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('barangay_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('zones');
    }
}

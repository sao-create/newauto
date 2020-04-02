<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBosyuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    protected $table = 'bosyu';

    public function up()
    {
        Schema::create('bosyu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('rank');
            $table->string('code');
            $table->string('body');
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
        Schema::dropIfExists('bosyu');
    }
}

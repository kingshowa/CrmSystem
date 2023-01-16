<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('opportunites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('etape');
            $table->date('date_cloture');
            $table->integer('clientID');
            $table->string('client');  //unnecessary column!!!!!!!
            $table->integer('remise')->nullable();
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
        Schema::dropIfExists('opportunites');
    }
};

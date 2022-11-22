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
        Schema::create('rendezs', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string(' heure');
            $table->string('compte');
            $table->string('client');
            $table->string('commerciel');
            $table->timestamps()->after('commercial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendezs');
    }
};

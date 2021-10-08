<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDomicilios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilios', function (Blueprint $table) {
            $table->id('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->text('domicilio');
            $table->string('numero_exterior');
            $table->text('colonia');
            $table->string('cp');    
            $table->string('ciudad');  
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
        Schema::dropIfExists('user_domicilios');
    }
}

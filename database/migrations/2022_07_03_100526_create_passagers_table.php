<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passagers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('type');
            $table->string('prix');
            $table->integer('prix_business');
            $table->foreignId('vol_id')->constrained('vols');
            // $table->unsignedBigInteger('vol_id');
            //    $table->foreign('vol_id')
            //       ->references('id')
            //       ->on('vols')
            //       ->onDelete('cascade');
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
        Schema::dropIfExists('passagers');
    }
}

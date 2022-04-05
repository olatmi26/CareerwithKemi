<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefereesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->string('refFullName')->nullable();
            $table->string('refOrganisation', 140)->nullable();
            $table->string('refPosition')->nullable();
            $table->string('refEmail')->unique()->index()->nullable();
            $table->string('refPhone', 11)->unique()->index()->nullable();
            $table->boolean('onRequest')->default(false);
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
        Schema::dropIfExists('referees');
    }
}

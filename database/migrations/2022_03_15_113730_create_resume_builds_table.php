<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('resume_builds', function (Blueprint $table) {
            $table->id();
            $table->uuid('orderID')->unique()->nullable();
            $table->string('name')->unique()->nullable();
            $table->foreignId('resume_type_id')->constrained();
            $table->unsignedBigInteger('user_id')->index();
            $table->boolean('completed')->default(false)->nullable();
            $table->boolean('asDownload')->default(false)->nullable();
            $table->boolean('paymentSuccessful')->default(false)->nullable();
            $table->dateTime('datePurchased')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_builds');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('resume_types', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->index();
            $table->longText('description')->nullable();
            $table->string('featureImage')->nullable();
            $table->unsignedInteger('cost')->nullable()->index();
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
        Schema::dropIfExists('resume_types');
    }
}

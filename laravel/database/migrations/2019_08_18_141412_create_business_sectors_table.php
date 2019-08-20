<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_sectors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('icon');
            $table->string('name');
            $table->text('description');
            $table->text('segments');
            $table->string('uri')->unique();
            $table->text('banner');
            $table->text('image');
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
        Schema::dropIfExists('business_sectors');
    }
}

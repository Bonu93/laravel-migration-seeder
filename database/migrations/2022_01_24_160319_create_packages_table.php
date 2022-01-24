<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 150);
            $table->string('city', 100);
            $table->text('description');
            $table->unsignedTinyInteger('days');
            $table->smallInteger('price');
            $table->string('image');
            $table->boolean('is_available')->default(1);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}

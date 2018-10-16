<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar');
            $table->string('name_en')->nullable();;
            $table->string('name_fa')->nullable();;
            $table->text('details_ar')->nullable();
            $table->text('details_en')->nullable();
            $table->text('details_fa')->nullable();
            $table->text('phone')->nullable();
            $table->integer('category');
            $table->string('filename')->nullable();
            $table->decimal('lat', 10,8)->nullable();
            $table->decimal('lng', 11,8)->nullable();
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
        Schema::dropIfExists('services');
    }
}

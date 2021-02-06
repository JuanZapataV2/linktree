<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableForeignKeyConstraints();

        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id',128);
            $table->foreignId('social_id');
            $table->string('url',256)->default('https://my.website.com');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('social_id')
                ->references('id')->on('default_socials')
                ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('socials');
    }
}

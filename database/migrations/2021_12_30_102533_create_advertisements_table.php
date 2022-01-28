<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->integer('maincategoryid');
            $table->integer('subcategoryid');
            $table->integer('userid');
            $table->string('bookname');
            $table->string('authorname');
            $table->string('publisher');
            $table->string('language');
            $table->string('binding');
            $table->string('bookcondition');
            $table->string('pages');
            $table->integer('price');
            $table->string('name');
            $table->string('mobileno');
            $table->string('email');
            $table->string('state');
            $table->text('photos');
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
        Schema::dropIfExists('advertisements');
    }
}

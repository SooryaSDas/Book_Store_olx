<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_categories', function (Blueprint $table) {
            $table->id();
            $table->string('maincategory');
            $table->timestamps();
        });

        DB::table('main_categories')->insert([     ['maincategory' => 'Classics'],     ['maincategory' => 'Comic Book or Graphic Novel'],  ['maincategory' => 'Horror'],     ['maincategory' => 'Detective and Mystery'],  ['maincategory' => 'Essays'],     ['maincategory' => 'Historical Fiction'],  ['maincategory' => 'Science Fiction'],     ['maincategory' => 'Biographies and Autobiographies'],  ['maincategory' => 'Short Stories'],     ['maincategory' => 'Action and Adventure'] ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_categories');
    }
}

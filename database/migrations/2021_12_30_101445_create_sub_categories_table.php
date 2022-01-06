<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('subcategory');
            $table->integer('maincategoryid');
            $table->timestamps();
        });

        DB::table('sub_categories')->insert([ ['subcategory' => 'Cook Book', 'maincategoryid' => '1'], ['subcategory' => 'Other', 'maincategoryid' => '1'], 
                ['subcategory' => 'Super Hero', 'maincategoryid' => '2'], ['subcategory' => 'Manga', 'maincategoryid' => '2'], ['subcategory' => 'Other', 'maincategoryid' => '2'], 
                ['subcategory' => 'Comedy Horror', 'maincategoryid' => '3'], ['subcategory' => 'Dark Fantasy', 'maincategoryid' => '3'],  ['subcategory' => 'Gothic ', 'maincategoryid' => '3'], ['subcategory' => 'Other ', 'maincategoryid' => '3'], 
                ['subcategory' => 'Domestic', 'maincategoryid' => '4'], ['subcategory' => 'Hardboiled', 'maincategoryid' => '4'],['subcategory' => 'Investigator', 'maincategoryid' => '4'], ['subcategory' => 'Supernatural', 'maincategoryid' => '4'],  ['subcategory' => 'Other', 'maincategoryid' => '4'],
                ['subcategory' => 'Essay', 'maincategoryid' => '5'], 
                ['subcategory' => 'Multi-Period Epics, Series, and Sagas', 'maincategoryid' => '6'], ['subcategory' => 'Historical Romantic Fiction', 'maincategoryid' => '6'], ['subcategory' => 'Historical Western Fiction', 'maincategoryid' => '6'], ['subcategory' => 'Alternate Histories', 'maincategoryid' => '6'],['subcategory' => 'Others', 'maincategoryid' => '6'],
                ['subcategory' => 'Space Opera', 'maincategoryid' => '7'], ['subcategory' => 'Military Science Fiction', 'maincategoryid' => '7'], ['subcategory' => 'Soft Science Fiction', 'maincategoryid' => '7'],  ['subcategory' => 'Other', 'maincategoryid' => '7'],
                ['subcategory' => 'Biographies', 'maincategoryid' => '8'], ['subcategory' => 'Autobiographies', 'maincategoryid' => '8'],
                ['subcategory' => 'Short Stories', 'maincategoryid' => '9'],
                ['subcategory' => 'Action and Adventure', 'maincategoryid' => '10'],  ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}

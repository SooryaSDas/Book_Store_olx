<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\Advertisement;
use DB;

class MainCategoryController extends Controller
{
    
    public function index()
    {
      $articles = MainCategory::all();
      $ads = DB::table('advertisements')->get();
        $output = '';
      return view("dashboard",["articles" =>$articles, "ads"=>$ads,"output"=>$output]);
    }

 

}

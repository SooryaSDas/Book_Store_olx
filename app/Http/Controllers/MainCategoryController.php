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
      return view("userdashboard",["articles" =>$articles, "ads"=>$ads,"output"=>$output]);
    }

    public function home()
    {
      $articles = MainCategory::all();
      $ads = DB::table('advertisements')->get();
        $output = '';
      return view("home",["articles" =>$articles, "ads"=>$ads,"output"=>$output]);
    }

 

}

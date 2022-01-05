<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;

class MainCategoryController extends Controller
{
    
    public function index()
    {
      $articles = MainCategory::all();
      return view("dashboard",["articles" =>$articles]);
    }

 

}

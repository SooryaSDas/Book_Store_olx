<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;

class UserController extends Controller
{
    public function viewAds(Request $request, $maincategory, $id){
            // echo $maincategory;
            // echo "<br>";
            // echo "$id";


            if($id ==1)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.classics',["articles" =>$articles]);
            }

            if($id ==2)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.Comicbook',["articles" =>$articles]);
            }

           elseif($id ==3)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.horror',["articles" =>$articles]);
            }

            elseif($id ==4)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.detective',["articles" =>$articles]);
            }

            elseif($id ==5)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.essays',["articles" =>$articles]);
            }

            elseif($id ==6)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.historicalfiction',["articles" =>$articles]);
            }

            elseif($id ==7)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.sciencefiction',["articles" =>$articles]);
            }

            elseif($id ==8)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.biographies',["articles" =>$articles]);
            }

            elseif($id ==9)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.shortstories',["articles" =>$articles]);
            }

            elseif($id ==10)
            {
                $articles = MainCategory::all();
                return view('users.publishedads.actionandadventure',["articles" =>$articles]);
            }
        
    }
}

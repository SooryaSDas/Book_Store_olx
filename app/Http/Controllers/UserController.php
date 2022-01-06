<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\SubCategory;
use DB;

class UserController extends Controller
{
    public function index(){

        $articles = MainCategory::all();
        return view("users.postad",["articles" =>$articles]);

    }
    

    public function categories(Request $request, $maincategory, $id){
        // echo $maincategory;
        // echo "<br>";
        // echo "$id";


        if($id ==1)
        {
            $articles = MainCategory::all();
            // $subcategories = SubCategory::all();
            $subcategories = DB::table('main_categories')
                ->select('*')
                ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
                ->where(['main_categories.id'=>$id])
                ->get();
            return view('users.publishedads.classics',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        if($id ==2)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.Comicbook',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

       elseif($id ==3)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.horror',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        elseif($id ==4)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.detective',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        elseif($id ==5)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.essays',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        elseif($id ==6)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.historicalfiction',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        elseif($id ==7)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.sciencefiction',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        elseif($id ==8)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.biographies',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        elseif($id ==9)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.shortstories',["articles" =>$articles,"subcategories"=>$subcategories]);
        }

        elseif($id ==10)
        {
            $articles = MainCategory::all();
            $subcategories = DB::table('main_categories')
            ->select('*')
            ->join('sub_categories', 'sub_categories.maincategoryid','=','main_categories.id')
            ->where(['main_categories.id'=>$id])
            ->get();
            return view('users.publishedads.actionandadventure',["articles" =>$articles,"subcategories"=>$subcategories]);
        }
    
     }

}

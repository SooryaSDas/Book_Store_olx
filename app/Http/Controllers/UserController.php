<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Advertisement;

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

    public function actionadventure(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');

            // for printing - checking data coming or not
            // $data = array(
            //     'maincategoryid' => $ads->maincategoryid,
            //     'subcategoryid' =>  $ads->subcategoryid,
            //     'bookname' =>  $ads->bookname,
            //     'authorname' => $ads->authorname,
            //     'publisher' =>  $ads->publisher,
            //     'price' =>  $ads->price,
            //     'name' =>  $ads->name,
            //     'mobileno' =>  $ads->mobileno,
            //     'email' => $ads->email,
            //     'state' =>  $ads->state,
            //     'photos' =>  $ads->photos,
            // );

            //     echo '<pre>';
            //     print_r($data);
            //     echo '</pre>';
        }
    }


    public function classics(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function biographies(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function commic(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function detective(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function essays(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function historical(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function horror(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function sciencefiction(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function shortstories(Request $request){
        $this->validate($request,[
            'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date.'-'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/',$imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[]=$url;
                    $count++;
                }
            }

            $image = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->bookname = $request->input('bookname');
            $ads->authorname = $request->input('authorname');

            $ads->publisher = $request->input('publisher');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobileno = $request->input('mobileno');

            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->photos =  $image;
            $ads->save();
            return redirect('/dashboard');
        }
    }

    public function getads(){
        echo "hello";
       
    }
}


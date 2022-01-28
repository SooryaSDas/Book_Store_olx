<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\MainCategory;
use App\Models\Advertisement;
use App\Models\Cart;
use DB;
use Session;
use Auth;

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

    public function addtocart(Request $request){
      $cart = new Cart;
      $cart->product_id = $request->input('product_id');
      $cart->user_id = $request->input('user_id');
      $cart->save();
      return redirect('/dashboard');
    }

    static function cartitem(){
        $userid =  Auth::user()->id;
        // $userid = Session::get('user')['id'];
        return Cart::where('user_id',$userid)->count();
    }

    function cartlist(){
      $userid = Auth::user()->id;
      $advertisements = DB::table('cart')
        ->join('advertisements','cart.product_id','=','advertisements.id')
        ->where('cart.user_id',$userid)
        ->select('advertisements.*','cart.id as cart_id')
        ->get();

        return view('users.cartlist',['advertisements'=>$advertisements]);
    }

    function removefromcart($id){
      Cart::destroy($id);
      return redirect('/cartlist');
    }
}

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
      $product_id = $request->input('product_id');
      $prod_qty = $request->input('prod_qty');
      $user_id = $request->input('user_id');
      if(Auth::check())
      {
      $prod_check = Advertisement::where('id',$product_id)->first();
      if($prod_check){
        if(Cart::where('product_id',$product_id)->where('user_id',$user_id)->exists())
        {
          return response()->json(['status' =>$prod_check->name."Already added to cart"]);
        }
        else{
          $cart = new Cart;
          $cart->product_id = $request->input('product_id');
          $cart->prod_qty = $request->input('product_qty');
          $cart->user_id = $request->input('user_id');
          $cart->save();
          return redirect('/dashboard');
        }
      }
    }
         
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
        ->select('advertisements.*','cart.id as cart_id','cart.prod_qty as prod_qty')
        ->get();
    
        return view('users.cartlist',['advertisements'=>$advertisements]);
    }

    public function updatecart(Request $request){
      $prod_id = $request->input('prod_id');
      $product_qty = $request->input('prod_qty');

      if(Cart::where('product_id',$prod_id)->where('user_id',Auth::user()->id)->exists())
      {
        $cart = Cart::where('product_id',$prod_id)->where('user_id',Auth::id())->first();
        $cart->prod_qty = $product_qty;
        $cart->update();
        return response()->json(['status'=>"Quantity Updated"]);
      }
    }

    function removefromcart($id){
      Cart::destroy($id);
      return redirect('/cartlist');
    }

    function mysellingbooks(){
      $userid = Auth::user()->id;
      $myads = DB::table('users')
        ->join('advertisements','users.id','=','advertisements.userid')
        ->where('users.id',$userid)
        ->select('advertisements.*','advertisements.id as ads_id')
        ->get();

        return view('users.myads',['myads'=>$myads]);
    }

    function removefromads($id){
      Advertisement::destroy($id);
      return redirect('/mysellingbooks');
    }
}

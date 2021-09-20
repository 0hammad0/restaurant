<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\food;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\order;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect("redirects");
        }else{
        $data=food::all();
        $data2=Foodchef::all();
        return view("home", compact("data","data2"));
        }
    }
    public function redirects(){
        if(Auth::id()){
        $data=food::all();
        $data2=Foodchef::all();
        $usertype = Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome');
        }else{
            $user_id=Auth::id();
            $count=Cart::where('user_id',$user_id)->count();
            return view ('home', compact('data', 'data2', 'count'));
        }
    }else{
        return redirect('register');
    }}
    public function addcart($id, Request $request){
        if(Auth::id()){
            $user_id=Auth::id();
            $food_id = $id;
            // $quantity = $request->quantity;

            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $request->quantity;

            $cart -> save();
            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }
    public function showcart($id, Request $request){
        if(Auth::id()==$id){
        $count = cart::where('user_id', $id)->count();
        $data = cart::where('user_id', $id)->join('food', 'carts.food_id','=', 'food.id')->get();
        $data2 = cart::select('*')->where('user_id', '=', $id)->get();
        return view('showcart', compact('count', 'data', 'data2'));
    }else{
        return redirect()->back();
    }
    }
    public function remove($id){
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function orderconfirm(Request $request){
        foreach($request->foodname as $key =>$foodname){
            $data = new order;
            $data->foodname=$foodname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            $data->name=$request->name;
            $data->phone=$request->phone;
            $data->address=$request->address;

            $data->save();
        }
        return redirect()->back();
    }
}

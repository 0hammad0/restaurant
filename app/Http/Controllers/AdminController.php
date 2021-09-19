<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\food;
use App\Models\Reservation;
use App\Models\Foodchef;

class AdminController extends Controller
{
    public function users(){
        $data=user::all();
        return view("admin.users", compact("data"));
    }
    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu(){
        $data=food::all();
        return view("admin.foodmenu", compact("data"));
    }
    public function upload(Request $request){
        $data = new food;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
    }
    public function deleteitem($id){
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateitem($id){
        $data=food::find($id);
        return view("admin.updateview", compact("data"));
    }
    public function update($id, Request $request){
        $data = food::find($id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        $data= food::all();
        return view('admin.foodmenu', compact('data'));
    }
    public function reservation(Request $request){
        $data = new reservation;

        //Method 1
        // $data->name=$request->name;

        $name=$request->name;
        $data->name=$name;

        //Method 2
        $data->email=$request->email;
        $data->phonenumber=$request->phonenumber;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();
    }
    public function viewreservation(){
        $data = reservation::all();
        return view("admin.adminreservation", compact("data"));
    }
    public function viewchef(){
        $data = foodchef::all();
        return view("admin.adminchef", compact("data"));
    }
    public function uploadchef(Request $request){
        $data = new foodchef;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image=$imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $data->save();
        return redirect()->back();
    }
    public function deletechef($id){
        $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatechef($id){
        $data=foodchef::find($id);
        return view("admin.updatechef", compact("data"));
    }
    public function updatingchef($id, Request $request){
        $data = foodchef::find($id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image=$imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $data->save();
        // return redirect()->back();

        $data= foodchef::all();
        return view('admin.adminchef', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function users(){
        $data=user::all();
        return view("admin.users", compact("data"));
    }
}
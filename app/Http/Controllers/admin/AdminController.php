<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $food = Food::limit(2)->get();
        
        return view('admin.index',compact('food'));
    }
}

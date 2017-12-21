<?php

namespace App\Http\Controllers;
use\App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars',compact(['cars']));
    }
/*    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact(['post']));
    }
    */
}
 

 

 
 
 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use InterventionImage;


use App\Models\Gift;

class GiftController extends Controller
{
    
    public function index(){

        $gifts = Gift::all();
        return view("index" , compact("gifts"));
    }

    public function main(){

        $gifts = Gift::all();
        return view("main" , compact("gifts"));
    }


    public function store(Request $request){

        $img = $request->img;
        $filename = $request->img->getClientOriginalName();
        $img = $request->file("img")->storeAs('',$filename,'public');

        $gift = new Gift;
        $gift -> name = $request -> name;
        $gift -> text = $request -> text;
        $gift ->img = $img ;
        $gift -> save();

        return redirect("/index"); 
    }


    public function show($id){

        $gift = Gift::find($id);
        $name = $gift -> name; 
        $text = $gift -> text;
        $img = $gift -> img;

        return view("show" , compact('name', 'text',"img"));
    }

}

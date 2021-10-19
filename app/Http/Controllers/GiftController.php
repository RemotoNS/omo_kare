<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use InterventionImage;


use App\Models\Gift;

class GiftController extends Controller
{
    
    public function store(Request $request){
        // $request->file("img")->store('gift_img');  

        $img = $request->img;
        $filename = $request->img->getClientOriginalName();
        $img = $request->file("img")->storeAs('',$filename,'public');
        $gift = new Gift;
        $gift -> name = $request -> name;
        $gift -> text = $request -> text;
        $gift ->img = $img ;

        $gift -> save();



        return redirect("/"); 
    }
//練習


    public function show(){
        $gift = Gift::find(12);
        $name = $gift -> name; 
        $text = $gift -> text;
        $img = $gift -> img;
/*

*/
        return view("show" , compact('name', 'text',"img"));

    }

}

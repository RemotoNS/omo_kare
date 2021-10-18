<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gift;

class GiftController extends Controller
{
    public function store(Request $request){
        $gift = new Gift;
        $gift -> name = $request -> name;
        $gift -> text = $request -> text;
        $gift -> img = $request -> img;
        $gift -> save();
        return redirect("/"); 


    }
}

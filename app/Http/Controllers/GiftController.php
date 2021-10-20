<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use InterventionImage;

use App\Models\Gift;

use App\Models\Character;

class GiftController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except(['index',"store","show_sub"]);
    }

    public function index(){
        $gifts = Gift::all();
        return view("index" , compact("gifts"));
    }

    public function store(Request $request){

        if(isset($request["img"])){
            $img = $request->img;
            $filename = $request->img->getClientOriginalName();
            $img = $request->file("img")->storeAs('',$filename,'public');
        }else{
            $img = "bouquet_omedetou.png";
        }

        $gift = new Gift;
        $gift -> name = $request -> name;
        $gift -> text = $request -> text;
        $gift ->img = $img ;
        $gift -> save();

        return redirect("/index"); 
    }

    public function show_sub($id){

        $gift = Gift::find($id);
        $name = $gift -> name; 
        $text = $gift -> text;

        $num = rand(1,10);
        $character = Character::find($num);
        $img = $character -> chara;

        return view("sub_show" , compact('name', 'text',"img"));
    }

    //コウヘイ専用ページ
    public function show($id){

        $gift = Gift::find($id);
        $id = $gift -> id; 
        $name = $gift -> name; 
        $text = $gift -> text;
        $img = $gift -> img;

        return view("show" , compact("id",'name', 'text',"img"));
    }

    public function main(){

        $gifts = Gift::all();
        return view("main" , compact("gifts"));
    }

    public function destroy_ok($id){

        $gift = Gift::find($id);
        $id = $gift -> id; 

        return view("destroy" , compact("id"));
    }

    public function destroy($id){

        $gift = Gift::find($id);
        $gift -> delete();
        return redirect("/main"); 
    }


    //キャラ作りのためのメソッド
    public function store_chara(Request $request){

        $chara = $request->chara;
        $filename = $request->chara->getClientOriginalName();
        $chara = $request->file("chara")->storeAs('',$filename,'public');

        $character = new Character;
        $character -> chara = $chara;
        $character -> save();

        return redirect("/chara"); 
    }



}

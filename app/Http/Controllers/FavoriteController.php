<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\User;



class FavoriteController extends Controller
{
    //
    public function home(){
        // $favorite = Favorite::inRandomOrder()->first();
        $favorites = Favorite::inRandomOrder()->take(3)->get();

        return view('favorite.home',compact('favorites'));
    }

    public function checkList(){
        $favorites = Favorite::all();
        return view('favorite.check_list',compact('favorites'));
    }
    public function history(){
        $favorites = Favorite::all();
        return view('favorite.history',compact('favorites'));
    }

    public function showList(){
        $favorites = Favorite::all();
        return view('favorite.list',compact('favorites'));
    }


    public function detail($id){
        $favorite = Favorite::find($id);
        return view('favorite.detail',compact('favorite'));
    }

    public function create(){
        return view('favorite.create');
    }

    public function edit($id){
        $favorite = Favorite::find($id);
        return view('favorite.edit',compact('favorite'));
    }

    public function store(Request $request){
        $favorite = new Favorite;
        // $favorite->user_id = Auth::id();
        $favorite->user_id = 1;
        $favorite->title = $request->title;
        $favorite->content = $request->content;
        $favorite->type = $request->type;
        $favorite->group = $request->group;
        
        $filename=$request->file('image')->store('public'); //storageフォルダに投稿した画像を保存しファイルパスを格納
        $favorite->image=str_replace('public/','',$filename);
        
        $iconname=$request->file('icon')->store('public'); //storageフォルダに投稿した画像を保存しファイルパスを格納
        $favorite->icon=str_replace('public/','',$iconname);

        $favorite->save();
        return redirect()->route('favorites');
    }


    public function update(Request $request, $id){
        $favorite = Favorite::find($id);
        $favorite->title = $request->title;
        $favorite->content = $request->content;
        $favorite->type = $request->type;
        $favorite->group = $request->group;

        $favorite->save();
        return redirect()->route('favorites');

    }


    public function delete($id){
        $favorite = Favorite::find($id);
        $favorite->delete();
        return redirect()->route('favorites');;
    }
}

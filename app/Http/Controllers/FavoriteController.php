<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\User;



class FavoriteController extends Controller
{
    //


    public function checkList(){
        $favorites = Favorite::all();
        return view('favorite.check_list',compact('favorites'));
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

    public function store(Request $request){
        $favorite = new Favorite;
        // $favorite->user_id = Auth::id();
        $favorite->user_id = 1;
        $favorite->title = $request->title;
        $favorite->content = $request->content;
        
        $filename=$request->file('image')->store('public'); //storageフォルダに投稿した画像を保存しファイルパスを格納
        $favorite->image=str_replace('public/','',$filename);
        
        $iconname=$request->file('icon')->store('public'); //storageフォルダに投稿した画像を保存しファイルパスを格納
        $favorite->icon=str_replace('public/','',$iconname);

        $favorite->save();
        return redirect()->route('favorites');
    }


    public function delete($id){
        $favorite = Favorite::find($id);
        $favorite->delete();
        return redirect()->route('favorites');;
    }
}

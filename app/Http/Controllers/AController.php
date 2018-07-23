<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;

class AController extends BaseController
{
    public function rakuten()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->rakuten==0){
            $user->rakuten = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('rakuten');
    }
    
    public function rakutenprime()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->rakuten==0){
            $user->rakuten = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('rakutenprime');
    }
    
    
     public function cafe()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->cafe==0){
            $user->cafe = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
 
        return view('cafe');
    }
    

    public function cafeprime()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->cafe==0){
            $user->cafe = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('cafeprime');
    }
    

     public function movie()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->movie==0){
            $user->movie = 10;
            $user->point = $user->point + 10;
            $user->save();
        }

        return view('movie');
    }
    
    public function movieprime()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->movie==0){
            $user->movie = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('movieprime');
    }
    
    public function amusement()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->amusement==0){
            $user->amusement = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('amusement');
    }
    
    public function amusementprime()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->amusement==0){
            $user->amusement = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('amusementprime');
    }
    
     public function shopping()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->shopping==0){
            $user->shopping = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('shopping');
    }
    
    public function shoppingprime()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->shopping==0){
            $user->shopping = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('shoppingprime');
    }
    
    public function workinfo()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->workinfo==0){
            $user->workinfo = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('workinfo');
    }

    
    public function workinfoprime()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->workinfo==0){
            $user->workinfo = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        return view('workinfoprime');
    }
    public function newquiz(){
        return view("newquiz/newquiz");
    }
}


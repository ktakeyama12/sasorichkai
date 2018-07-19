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
            $user->rakuten = 1;
            $user->save();
        }
        return view('rakuten');
    }
    
    public function rakutenprime()
    {
        return view('rakutenprime');
    }
    
    
     public function cafe()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->cafe==0){
            $user->cafe = 1;
            $user->save();
        }
 
        return view('cafe');
    }
    

    public function cafeprime()
    {
        return view('cafeprime');
    }
    

     public function movie()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->movie==0){
            $user->movie = 1;
            $user->save();
        }

        return view('movie');
    }
    
    public function movieprime()
    {
        return view('movieprime');
    }
    
    public function amusement()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->amusement==0){
            $user->amusement = 1;
            $user->save();
        }
        return view('amusement');
    }
    
    public function amusementprime()
    {
        return view('amusementprime');
    }
    
     public function shopping()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->shopping==0){
            $user->shopping = 1;
            $user->save();
        }
        return view('shopping');
    }
    
    public function shoppingprime()
    {
        return view('shoppingprime');
    }
    
    public function workinfo()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->workinfo==0){
            $user->workinfo = 1;
            $user->save();
        }
        return view('workinfo');
    }

    
    public function workinfoprime()
    {
        return view('workinfoprime');
    }
}


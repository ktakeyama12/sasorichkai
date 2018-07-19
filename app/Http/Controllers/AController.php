<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AController extends BaseController
{
        public function rakuten()
    {
        return view('rakuten');
    }
    
    public function rakutenprime()
    {
        return view('rakutenprime');
    }
    
    
     public function cafe()
    {
        return view('cafe');
    }
    
    public function cafeprime()
    {
        return view('cafeprime');
    }
    
    
     public function movie()
    {
        return view('movie');
    }
    
    public function movieprime()
    {
        return view('movieprime');
    }
    
    public function amusement()
    {
        return view('amusement');
    }
    
    public function amusementprime()
    {
        return view('amusementprime');
    }
    
     public function shopping()
    {
        return view('shopping');
    }
    
    public function shoppingprime()
    {
        return view('shoppingprime');
    }
    
    public function workinfo()
    {
        return view('workinfo');
    }
    
    public function workinfoprime()
    {
        return view('workinfoprime');
    }
}

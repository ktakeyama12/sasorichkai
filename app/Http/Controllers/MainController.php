<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MainController extends BaseController
{
    public function banana()
    {
        return view('banana');
    }
    
    public function match()
    {
        return view('match');
    }
    
    public function shooting()
    {
        return view('shootingWelcome');
    }
    
    public function shootingGame(){
        
        return view('shooting');
    }
    
    public function quiz()
    {
        return view('quiz');
    }
    
    public function index()
    {
        
        return view('contents.index');
    }
    
    public function gallery()
    {
        
        return view('contents.branch');
    }
    
    public function branch()
    {
        
         $content = new Content;
         $contents = Content::all();
        
        return view('contents.branch',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }
    
    
    
    public function store(Request $request)
    {
       
        $content = new Content;
        $content->content = $request->content;
        $content->name = $request->name;
        $content->review = $request->review;
        $content->save();
        $contents = Content::all();
        
         return view('contents.branch',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }
    
    public function show(){
        return view('users.show');
    }
    
    public function mihon(){
        return view('mihon');
    }
    
    public function test(){
    
     return view('test');
    }
    
    
//コントローラーでユーザーが有料会員であるかないか確かめる。
//isPrime()で有料会員か見極める。

    public function isPrime(){
        $prime = \Auth::user()->prime;
        if($prime == 0){
            return view("free");
        
        }elseif($prime == 1){
            return view("contents.gallery");
            
        }
    }
    
     public function amusePrime(){
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->amusement==0){
            $user->amusement = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        $prime = \Auth::user()->prime;
        if($prime == 0){
            return view("amusement");
        
        }elseif($prime == 1){
            return view("amusementprime");
            
        }
    }
    
     public function shoppingPrime(){
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->shopping==0){
            $user->shopping = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        $prime = \Auth::user()->prime;
        if($prime == 0){
            return view("shopping");
        
        }elseif($prime == 1){
            return view("shoppingprime");
            
        }
    }
    
     public function moviePrime(){
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->movie==0){
            $user->movie = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        $prime = \Auth::user()->prime;
        if($prime == 0){
            return view("movie");
        
        }elseif($prime == 1){
            return view("movieprime");
            
        }
    }
    
     public function rakutenPrime(){
        $prime = \Auth::user()->prime;
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->rakuten==0){
            $user->rakuten = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        if($prime == 0){
            return view("rakuten");
        
        }elseif($prime == 1){
            return view("rakutenprime");
            
        }
    }
    
     public function cafePrime(){
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->cafe==0){
            $user->cafe = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        $prime = \Auth::user()->prime;
        if($prime == 0){
            return view("cafe");
        
        }elseif($prime == 1){
            return view("cafeprime");
            
        }
    }

    
    public function welcomePrime(Request $request){
         $prime = $request->prime;
        $id = \Auth::user()->id;
        $user = User::find($id);
        $user->prime=$prime;
        $user->save();
        
       
       
        // $name = \Auth::user()->name;
        // $password = \Auth::user()->password;
        // $point = \Auth::user()->point;
        // $workinfo = \Auth::user()->workinfo;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $name = \Auth::user()->name;
        // $param = [
        //      'prime' =>$prime,
        //      'id'=>$id,
        //      ];
        // DB::table('users')->where('id', $id)->insert($param);
            return redirect("/");
    }
    
     public function welcomePrimeF(Request $request){
        $prime = $request->prime;
        $id = \Auth::user()->id;
        $user = User::find($id);
        $user->prime=$prime;
        $user->save();
            return redirect("fukuoka");
    }
    
    public function welcomePrimeT(Request $request){
        $prime = $request->prime;
        $id = \Auth::user()->id;
        $user = User::find($id);
        $user->prime=$prime;
        $user->save();
            return redirect("tokyo");
    }
    
     public function welcomePrimeO(Request $request){
        $prime = $request->prime;
        $id = \Auth::user()->id;
        $user = User::find($id);
        $user->prime=$prime;
        $user->save();
            return redirect("osaka");
    }
    
   
    
    
    

}
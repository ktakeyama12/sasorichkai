<?php

namespace App\Http\Controllers;

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
            return view("gallery");
            
        }else{
            print("１０円くれ！");
        }
    }
    
}
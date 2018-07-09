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
}

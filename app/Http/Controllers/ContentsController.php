<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentsController extends Controller
{
    public function index()
    {
        
        return view('contents.index');
    }
    
    public function gallery()
    {
        
        return view('contents.gallery');
    }
    
     public function branch()
    {
        
        
        return view('contents.branch');
    }
    
    public function fukuoka()
    {
        
         $content = new Content;
         $contents = Content::all();
        
        return view('contents.fukuoka',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }
    
     public function tokyo()
    {
        
         $content = new Content;
         $contents = Content::all();
        
        return view('contents.tokyo',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }
    
    public function osaka()
    {
        
         $content = new Content;
         $contents = Content::all();
        
        return view('contents.osaka',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }
    public function okinawa()
    {
        
         $content = new Content;
         $contents = Content::all();
        
        return view('contents.okinawa',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }
    
    
  
    public function storeF(Request $request)
    {
       
        $content = new Content;
        $content->content = $request->content;
        $content->name = $request->name;
        $content->save();
        $contents = Content::all();
        
         return view('contents.fukuoka',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }

}

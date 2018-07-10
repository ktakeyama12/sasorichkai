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
        $content->save();
        $contents = Content::all();
        
         return view('contents.branch',[
            'content' => $content,
            'contents' => $contents,
            ]);
    }

}

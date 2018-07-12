<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use DB;
use App\Branchfavorites;

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
         $count = Branchfavorites::where("favorite_id", 2)->count();
                                    //  $count = DB::select('select count(favorite_id) from branchfavorites where favorite_id = 2');
                        
        return view('contents.fukuoka',[
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
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
    
    
  
    public function storeF(Request $request)
    {
       
        $content = new Content;
        $content->content = $request->content;
        $content->name = $request->name;
        $content->save();
        $contents = Content::all();
        $count = Branchfavorites::where("favorite_id", 2)->count();
        
         return view('contents.fukuoka',[
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }

}

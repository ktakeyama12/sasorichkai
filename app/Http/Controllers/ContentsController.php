<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\TokyoContent;
use App\User;
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
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->branches==0){
            $user->branches = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        
        return view('contents.branch');
    }
    
    public function fukuoka()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->fukuoka==0){
            $user->fukuoka = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
        
         $user = \Auth::user();
         $users = User::all();
         $content = new Content;
         $contents = Content::all();
         $count = Branchfavorites::where("favorite_id", 2)->count();
        
                                    //  $count = DB::select('select count(favorite_id) from branchfavorites where favorite_id = 2');
                        
        return view('contents.fukuoka',[
            'user' => $user,
            'users' =>$users,
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
    
     public function tokyo()
    {

        
         $user = \Auth::user();
         $users = User::all();
         $content = new TokyoContent;
         $contents = TokyoContent::all();
         $count = Branchfavorites::where("favorite_id", 1)->count();

        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->tokyo==0){
            $user->tokyo = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
 
        
                                    //  $count = DB::select('select count(favorite_id) from branchfavorites where favorite_id = 2');
                        
        return view('contents.tokyo',[
            'user' => $user,
            'users' =>$users,
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
    
    public function osaka()
    {
        $loginuser = \Auth::user();
        $user = User::find($loginuser->id);
        if($user->osaka==0){
            $user->osaka = 10;
            $user->point = $user->point + 10;
            $user->save();
        }
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
        $user = \Auth::user();
        $users = User::all();
        $content = new Content;
        $content->content = $request->content;
        $content->user_id = $user->id;
        $content->user_name = $user->name;
        $content->user_point = $user->point;
        $content->save();
        $contents = Content::all();
        $count = Branchfavorites::where("favorite_id", 2)->count();
       
        
         return view('contents.fukuoka',[
            'user' => $user,
            'users' =>$users,
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
    
     public function storeT(Request $request)
    {
        $user = \Auth::user();
        $users = User::all();
        $content = new TokyoContent;
        $content->content = $request->content;
        $content->user_id = $user->id;
        $content->user_name = $user->name;
        $content->user_point = $user->point;
        $content->save();
        $contents = TokyoContent::all();
        $count = Branchfavorites::where("favorite_id", 1)->count();
       
        
         return view('contents.tokyo',[
            'user' => $user,
            'users' =>$users,
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }

}

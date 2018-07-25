<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加
use App\Content; // add
use App\TokyoContent; // add
use App\OsakaContent; // add
use App\Branch; // add
use App\Branchfavorites;
use DB;


$branch_id = DB::select("select*from branches where id = 3");

class UsersController extends Controller
{
    
    public function show(){
        
        $user = \Auth::user();
        $userdata = User::find($user->id);
        $alldata = User::all()->sortByDesc('point');
        $points =
        $userdata->workinfo
        + $userdata->rakuten
        + $userdata->cafe
        + $userdata->movie
        + $userdata->amusement
        + $userdata->shopping
        + $userdata->branches
        + $userdata->tokyo
        + $userdata->osaka
        + $userdata->fukuoka
        + $userdata->postpoint;
        $userdata->point = $points;
        $userdata->save();
        $user = \Auth::user();
        $users = User::all();
        
       

        return view('users.show',[
            'user' => $user,
            'points' => $points,
            'alldata' => $alldata,
            'users' => $users
        ]);
    }
    
    public function store(Request $request)
    {
        $user = \Auth::user();
        $users = User::all();
        $content->save();
        
         return view('users.show',[
            'user' => $user,
            'users' =>$users,
            ]);
    }
 
    
     public function fukuokafavorite(Request $request)
    {
        $favorite_id = $request->fukuoka_id;
        $user_id = \Auth::user()->id;
        $param = [
            'user_id' => $user_id,
            'favorite_id' =>$favorite_id,
            ];
        // DB::insert("insert into `branchfavorites` (`user_id`, `favorite_id`) values ($user_id, $favorite_id) ");
        DB::table('branchfavorites')->insert($param);
        
        // if(DB::select("select * from branchfavorites where favorite_id = $branch_id" )){
        //     DB::delete("delete from branchfavorites where favorite_id = $branch_id");
        // }else{
        // $fukuoka_favorite = Branch::find($branch_id);
        // $fukuoka_favorite->branchfavorites()->attach($branch_id);
        // }
         $user = \Auth::user();
         $users = User::all();
         
        $userdata = User::find($user->id);
        $alldata = User::all()->sortByDesc('point');
        $points =
        $userdata->workinfo
        + $userdata->rakuten
        + $userdata->cafe
        + $userdata->movie
        + $userdata->amusement
        + $userdata->shopping
        + $userdata->branches
        + $userdata->tokyo
        + $userdata->osaka
        + $userdata->fukuoka;
        $userdata->point = $points;
        $userdata->save();
        $user = \Auth::user();
        
         $content = new Content;
         $contents = Content::all();
         $count = Branchfavorites::where("favorite_id", 2)->count();
        
        return view('contents.fukuoka',[
            'user' => $user,
            'users' =>$users,
            
            'points' => $points,
            'alldata' => $alldata,
            
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
         
     public function fukuokaunfavorite(Request $request){
        $user_id = \Auth::user()->id;
        DB::table('branchfavorites')->where('favorite_id', 2)->where('user_id', $user_id)->delete();
        $user = \Auth::user();
        $users = User::all();
        
        $userdata = User::find($user->id);
        $alldata = User::all()->sortByDesc('point');
        $points =
        $userdata->workinfo
        + $userdata->rakuten
        + $userdata->cafe
        + $userdata->movie
        + $userdata->amusement
        + $userdata->shopping
        + $userdata->branches
        + $userdata->tokyo
        + $userdata->osaka
        + $userdata->fukuoka;
        $userdata->point = $points;
        $userdata->save();
        $user = \Auth::user();
        
        
        $content = new Content;
        $contents = Content::all();
        $count = Branchfavorites::where("favorite_id", 2)->count();
        
        return view('contents.fukuoka',[
            'user' => $user,
            'users' =>$users,
            
            'points' => $points,
            'alldata' => $alldata,
            
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
    
     public function tokyofavorite(Request $request)
    {
        $favorite_id = $request->tokyo_id;
        $user_id = \Auth::user()->id;
        $param = [
            'user_id' => $user_id,
            'favorite_id' =>$favorite_id,
            ];
        
        DB::table('branchfavorites')->insert($param);
        
       
         $user = \Auth::user();
         $users = User::all();
         
         $userdata = User::find($user->id);
        $alldata = User::all()->sortByDesc('point');
        $points =
        $userdata->workinfo
        + $userdata->rakuten
        + $userdata->cafe
        + $userdata->movie
        + $userdata->amusement
        + $userdata->shopping
        + $userdata->branches
        + $userdata->tokyo
        + $userdata->osaka
        + $userdata->fukuoka;
        $userdata->point = $points;
        $userdata->save();
        $user = \Auth::user();
        
         $content = new Content;
         $contents = Content::all();
         $count = Branchfavorites::where("favorite_id", 1)->count();
        
        return view('contents.tokyo',[
            'user' => $user,
            'users' =>$users,
            
            'points' => $points,
            'alldata' => $alldata,
            
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
         
     public function tokyounfavorite(Request $request){
        $user_id = \Auth::user()->id;
        DB::table('branchfavorites')->where('favorite_id', 1)->where('user_id', $user_id)->delete();
        $user = \Auth::user();
        $users = User::all();
        
         $userdata = User::find($user->id);
        $alldata = User::all()->sortByDesc('point');
        $points =
        $userdata->workinfo
        + $userdata->rakuten
        + $userdata->cafe
        + $userdata->movie
        + $userdata->amusement
        + $userdata->shopping
        + $userdata->branches
        + $userdata->tokyo
        + $userdata->osaka
        + $userdata->fukuoka;
        $userdata->point = $points;
        $userdata->save();
        $user = \Auth::user();
        
        
        $content = new Content;
        $contents = Content::all();
        $count = Branchfavorites::where("favorite_id", 1)->count();
        
        return view('contents.tokyo',[
            'user' => $user,
            'users' =>$users,
            
             'points' => $points,
            'alldata' => $alldata,
            
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
    
    
     public function osakafavorite(Request $request)
    {
        $favorite_id = $request->osaka_id;
        $user_id = \Auth::user()->id;
        $param = [
            'user_id' => $user_id,
            'favorite_id' =>$favorite_id,
            ];
        
        DB::table('branchfavorites')->insert($param);
        
       
         $user = \Auth::user();
         $users = User::all();
         $content = new Content;
         $contents = Content::all();
         $count = Branchfavorites::where("favorite_id", 3)->count();
        
        return view('contents.osaka',[
            'user' => $user,
            'users' =>$users,
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
         

     public function osakaunfavorite(Request $request){
        $user_id = \Auth::user()->id;
        DB::table('branchfavorites')->where('favorite_id', 3)->where('user_id', $user_id)->delete();
        $user = \Auth::user();
        $users = User::all();
        $content = new Content;
        $contents = Content::all();
        $count = Branchfavorites::where("favorite_id", 3)->count();
        
        return view('contents.osaka',[
            'user' => $user,
            'users' =>$users,
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }

  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加
use App\Content; // add
use App\Branch; // add
use App\Branchfavorites;
use DB;


$branch_id = DB::select("select*from branches where id = 3");

class UsersController extends Controller
{
    
    
     public function fukuokafavorites($id)
    {
        $user = User::find($id);
        $favorites = $user->fukuokafavorites()->paginate(10);
        //フェイバリットメソッド（お気に入りページ）の編集。お気に入りを確認するユーザーを$idを元に特定。１ページにつき１０このお気に入りを表示。


        $data = [
            'user' => $user,
            'microposts' => $favorites,
        ];

        $data += $this->counts($user);

        return view('users.favorites', $data);
         //user情報を$userに、users情報を$favoritesに割り当てることでデータを取り出し、usersフォルダのfavorites.blade.phpを表示する。
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
         $content = new Content;
         $contents = Content::all();
         $count = Branchfavorites::where("favorite_id", 2)->count();
        
        return view('contents.fukuoka',[
            'content' => $content,
            'contents' => $contents,
            'count' => $count,
            ]);
    }
         
     public function fukuokaunfavorite(Request $request){
        $user_id = \Auth::user()->id;
        DB::table('branchfavorites')->where('favorite_id', 2)->where('user_id', $user_id)->delete();
        
        $content = new Content;
        $contents = Content::all();
        $count = Branchfavorites::where("favorite_id", 2)->count();
        
        return view('contents.fukuoka',[
            'content' => $content,
            'contents' => $contents,
             'count' => $count,
            ]);
    }
    
  
}

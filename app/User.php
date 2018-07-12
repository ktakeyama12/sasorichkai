<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User; // 追加
use App\Branch; // add
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
   public function branchfavorites()
    {
        return $this->belongsToMany(Branch::class, 'branchfavorites', 'user_id', 'favorite_id')->withTimestamps();
    }
    
    
    public function fukuokafavorite()
    {
        $user_id = \Auth::user()->id;
        $branch_id = DB::select("select*from branches where where user_id = $user_id and id = 3");
        
        if(DB::select("select * from branchfavorites where where user_id = $user_id and favorite_id = $branch_id" )){
            DB::delete("delete from branchfavorites where where user_id = $user_id and favorite_id = $branch_id");
        }else{
        $fukuoka_favorite = Branch::find($branch_id);
        $fukuoka_favorite->branchfavorites()->attach($branch_id);
        }
        return redirect('/');

    }
}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BranchfavoritesController extends Controller
{
     public function store(Request $request)
    {
        $branch_id = DB::select("select * from branches where id = 3");
        \Auth::user()->fukuokafavorite($branch_id);
        return redirect('/');
    }
}

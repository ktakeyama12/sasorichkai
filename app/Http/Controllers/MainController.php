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
    public function branch()
    {
        return view('contents.branch');
    }
     public function branchs()
    {
        return view('contents.tokyo');
    }
    public function fukuoka()
    {
        return view('contents.fukuoka');
    }
    public function osaka()
    {
        return view('contents.osaka');
    }

    
}

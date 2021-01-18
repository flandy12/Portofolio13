<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        // membaca semua file yang berada pada folder storage/img
        // configurasi berada pada file filesystem 
        $c = Storage::allFiles('images');
       return view('index',['c'=>$c]);
    }
}

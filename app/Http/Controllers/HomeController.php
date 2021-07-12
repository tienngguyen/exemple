<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(){
        // echo "asdsa";
        return view('home.content');
    }
}

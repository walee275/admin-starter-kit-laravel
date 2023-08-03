<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function languageDemo(){
        $local = App::isLocal('ar');
        return view('languageDemo', compact('local'));
    }
}

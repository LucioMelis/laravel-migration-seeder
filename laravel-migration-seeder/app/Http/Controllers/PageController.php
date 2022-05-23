<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::where('orario_di_partenza','like', '2022-05-23' . '%')->get();
        return view('home', ['trains'=>$trains]);
    }
}

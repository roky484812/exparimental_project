<?php

namespace App\Http\Controllers\Farhan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function index(){
        $farhan = 'Farhan Sadik';
        return view('test', ['name'=> $farhan, 'name2'=> 'roky']);
    }
    public function store(Request $req){
        $test=  $req->test;
        $gender =  $req->input('gender');
        return response()->json(['test'=> $test, 'gender'=> $gender]);
    }
}

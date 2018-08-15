<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller{
    public function show(){
        return view('newview');
    }
    
    public function submit(Request $request){
        return $request;
    }

    public function submits(Request $request){
        $request->session()->put('name',$request['name']);
        // return view('data.showdata',['name'=>$request['name']]);
        return view('data.showdata',['name'=>$request->session()->get('name')]);
    }
}
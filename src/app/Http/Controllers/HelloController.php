<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        $item = [
            'content' => 'パラメータを渡す',
            'param' => $request->text
        ];
        return view('hello',$item);
    }
}

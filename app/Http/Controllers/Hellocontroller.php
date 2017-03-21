<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;

class Hellocontroller extends Controller
{
    //
    public function index(){
        $data =[
            'first_name'=>"Idham",
            'last_name'=>"Zulkifli"
        ];
        return view('hello.index',$data);
    }
}

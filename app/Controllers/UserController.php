<?php

namespace App\Controllers;
use App\Controllers\Controller;

class UserController extends Controller {
    public function index(){
        $message = "this is a message from me";
       return view('users/index',[
        'message' => $message
       ]);
    }
    public function edit(){
        echo "edit function";
    }
    public function create(){
        echo "create function";
    }
}
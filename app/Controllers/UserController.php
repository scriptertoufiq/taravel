<?php

namespace App\Controllers;
use App\Controllers\Controller;

class UserController extends Controller {
    public function index(){
        echo "index function";
    }
    public function edit(){
        echo "edit function";
    }
    public function create(){
        echo "create function";
    }
}
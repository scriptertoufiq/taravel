<?php
use App\Controllers\UserController;

return [
    '/user/profile' => [UserController::class,'index'],
    '/user/create' => ["UserController",'create'],
    '/user/edit' => ["UserController",'edit'],
    '/user/update' => ["UserController",'update'],
];
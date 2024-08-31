<?php

use App\Controllers\UserController;

return [
    '/user/profile' => [UserController::class,'index'],
    '/user/create' => [UserController::class,'create'],
    '/user/edit' => [UserController::class,'edit'],
    '/user/update' => [UserController::class,'update'],
];
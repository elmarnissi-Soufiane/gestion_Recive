<?php

use App\Http\Controllers\Api\Auth\AuthenticationController;
use App\Http\Controllers\CourseController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResources(
    [
        'recipes' => 'RecipeController'
    ]
);

<?php

use Illuminate\Support\Facades\Route;

Route::middleware('json-api:v1')->prefix('v1')->namespace('Api\V1')->group(function () {
    Route::get('posts', 'PostController@index')->defaults('resource_type', 'posts');
    Route::post('posts', 'PostController@store')->defaults('resource_type', 'posts');
    Route::get('posts/{post}', 'PostController@read')
        ->defaults('resource_type', 'posts')
        ->defaults('resource_id_name', 'post');
    Route::patch('posts/{post}', 'PostController@update')
        ->defaults('resource_type', 'posts')
        ->defaults('resource_id_name', 'post');
    Route::delete('posts/{post}', 'PostController@destroy')
        ->defaults('resource_type', 'posts')
        ->defaults('resource_id_name', 'post');
});

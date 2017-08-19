<?php

Route::get('/','TestController@index');

//Route::get('home','TestController@home');

//admin routes

Route::get('login','LoginController@login');

Route::get('product','ProductController@index');

Route::get('product/{id}/{id2}','ProductController@show');


//  /admin/product/create


Route::group(['prefix'=>'admin'],function (){

    Route::get('home','AdminController@home');
    Route::get('report','AdminController@report');

});

//get
//post
//put or patch
//detele




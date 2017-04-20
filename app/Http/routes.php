<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
get('/',function (){
   return '<center><a href="othman">Go to othman page <h1 style="background-color: red">Welcome to Frist project\'s</h1></a></center>';
});

Route::get('othman',function (){
    return '<a href="/">back to main page</a><br><center><img src="http://www.independent.co.uk/life-style/health-and-families/is-feminism-killing-romance-a7451416.html"></center>';
});
get('user/{anything}',function($anything){
return 'you entered user id =  '.$anything;
})->where('anything','[0-9]+');
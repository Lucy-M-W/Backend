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


Route::get('/about', function () {
    return view('about');
});

//Route::get('/movies',function() {
 //$movies = \App\Movie::where('title','=','shuga')->get()

    //$movie= new \App\Movie();
      //  $movie->title='Spiderman';
        //$movie->genre='awesome';
        //$movie->rating=5;
        //$movie->save();
       // $movie= \App\Movie::find(5);
        //$movie->genre="Horror";
        //$movie->save();

        //return \App\Movie::all();
     // $movies=\App\Movie::all();
        // return view('movies',['movies'=>$movies]);


//Route::get('/movies', function () {
      
//Route::get('/Students', function(){
	//return \App\Students::all();
	//});

Route::controller('students','moviescontroller');

	//$students= \App\Students::all();
	// return view('students',['students'=>$students]);});

{
  function getIndex(){
    $students=\App\Students::all();
    return view('students',['students'=>$students]);
  }

function getfind(){
  $students=\App\Students::find(1);
  return $students;
}
}

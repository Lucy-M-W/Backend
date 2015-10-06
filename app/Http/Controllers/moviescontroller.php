<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class moviescontroller extends Controller
{
    function index(){
        //$Movies = \App\Movie::where('title','=','shuga')->get();
      //$Movies = \App\movie::where('rating','>'2)->get(); //select * from movies where rating > 2
      //return $movies;
        //$movie= new \App/movie();
        //$Movie->title='Akirachix';
        //$movie->genre='awesome';
        //$movie->rating=5;
        //$movie->save();
       // $movie= \App\Movie::find(5);
        //$movie->genre="Horror";
        //$movie->save();
        //return $movie;
        

        // $movies=\App\Movie::all();
        // return view('movies',['movies'=>$movies]);
      //return \App\Movie;;all(); 


      $students= \App\Students::all();
          return view('students',['students'=>$students]);
     


    }
//function getCreate()
//{
 // $movie= new \App\Movie();
  //$movie->title-'Akirachix';
  //$movie->genre-'awesome';
  //$movie->rating=5;
  //$movie->save();
  //return 'Record updated';


   //function getAllStudentsstudent(){

      // $students=\App\Students::all();
       //   return view('students',['students'=>$students]);



}

//function postCreate(){
  // return view

//}
//<form action="{{url('movies/create'}}" method="post" accept.charset="utf-8">
      //<label for="title">title</label><input type="text" name="title" value="" id="title">
      //<label for="genre">genre</label><input type="text" name="genre" value="" id="genre">
      //<label for="rating">rating</label><iput tye="txt" name="rating" value="" id="rating">
     // <input type="hidden" name="_token" value="{{csrf}}" id="">

      //<p><input type="submit" value="save new movie"></p>
   // return "success";
      //$students = \App\Students::all();

        //return view('Students', ['students' => $students]);
//}
    //  function getAllStudentsstudent(){

      //   $students=\App\students::all();
      //   return View::make('Students'['students']);

      // }


 


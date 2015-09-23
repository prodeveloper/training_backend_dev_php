<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
        function getIndex()
        {
                // $movies = \App\Movie::where('title','=','Shuga')->get();
                // $movies = \App\Movie::where('rating','>',2)->get(); //select * from movies where rating > 2
                // return $movies;
                $movies=\App\Movie::all();
                return view('movies',['movies'=>$movies]);
        }
        function postCreate()
        {
                $movie= new \App\Movie();
                $movie->title='Akirachix';
                $movie->genre='awesome';
                $movie->rating=5;
                $movie->save();
                return "Record updated";
        }
        function getFind(){
                $movie=\App\Movie::find(3);
                return $movie;
        }
        function postUpdate()
        {
                $movie= \App\Movie::find(5);
                $movie->genre="Horror";
                $movie->save();
                return $movie;
        }
        function postDelete()
        {
                $movie= \App\Movie::find(2);
                $movie->delete();
                return null;
        }




}

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

        function getCreate()
        {
                return view('add_movie');
        }


        function postCreate()
        {
                $validator = \App\Movie::runValidator(\Input::all());

                if ($validator->fails()) {
                        return \Redirect::back()
                                ->withErrors($validator)
                                ->withInput();
                }
                $movie= new \App\Movie();
                $movie->title=\Input::get('title');
                $movie->genre=\Input::get('genre');
                $movie->rating=\Input::get('rating');
                $movie->save();
                return \Redirect::to('movies');
        }
        function getFind($id){
                $movie=\App\Movie::findOrFail($id);
                $edit_link=url('movies/update/'.$id);
                return view('movie',['movie'=>$movie, 'edit_link'=>$edit_link]);
        }

        function getUpdate($id)
        {
                $movie= \App\Movie::findOrFail($id);
                $update_url=url('movies/update/' . $id); 
                return view('edit_movie',['movie'=>$movie,'update_url'=>$update_url]);
        }

        function postUpdate($id)
        {
                $validator = \App\Movie::runValidator(\Input::all());

                if ($validator->fails()) {
                        return \Redirect::back()
                                ->withErrors($validator)
                                ->withInput();
                }
                $movie= \App\Movie::findOrFail($id);
                $movie->title=\Input::get('title');
                $movie->genre=\Input::get('genre');
                $movie->rating=\Input::get('rating');
                $movie->save();
                return \Redirect::to('movies');
        }
        function postDelete()
        {
                $movie= \App\Movie::find(2);
                $movie->delete();
                return null;
        }




}

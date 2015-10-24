<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
        public static $rules =  [
                'title' => 'required',
                'genre' => 'required|in:drama,comedy,horror',
                'rating' => 'required|integer|min:0|max:5',
        ];

        static function runValidator($data){

                return \Validator::make($data, \App\Movie::$rules);
        }
                //
}

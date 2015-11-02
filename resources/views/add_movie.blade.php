@extends('layouts.base')

@section('content')
<form action="{{url('movies/create')}}" method="post" accept-charset="utf-8">
<p><label for="title">title</label><input type="text" name="title" value="" id="title"> {{$errors->first('title')}}
</p>       
<p><label for="genre">genre</label><input type="text" name="genre" value="" id="genre">{{$errors->first('genre')}}
</p>
<p><label for="rating">rating</label><input type="text" name="rating" value="" id="rating">{{$errors->first('rating')}}
</p>
        <input type="hidden" name="_token" value="{{csrf_token()}}" id=""> 

        <p><input type="submit" value="Save New Movie"></p>
</form>
@endsection

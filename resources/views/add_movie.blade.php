<form action="{{url('movies/create')}}" method="post" accept-charset="utf-8">
        <label for="title">title</label><input type="text" name="title" value="" id="title">
        <label for="genre">genre</label><input type="text" name="genre" value="" id="genre">
        <label for="rating">rating</label><input type="text" name="rating" value="" id="rating">
        <input type="hidden" name="_token" value="{{csrf_token()}}" id=""> 

        <p><input type="submit" value="Save New Movie"></p>
</form>

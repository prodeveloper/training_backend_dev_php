<form action="{{$update_url}}" method="post" accept-charset="utf-8">
        <label for="title">title</label><input type="text" name="title" value="{{$movie->title}}" id="title">
        <label for="genre">genre</label><input type="text" name="genre" value="{{$movie->genre}}" id="genre">
        <label for="rating">rating</label><input type="text" name="rating" value="{{$movie->rating}}" id="rating">
        <input type="hidden" name="_token" value="{{csrf_token()}}" id=""> 

        <p><input type="submit" value="Update Movie"></p>
</form>

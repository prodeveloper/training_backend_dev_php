<table border="0" cellspacing="5" cellpadding="5">
        <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Rating</th>
        </tr>
        @foreach($movies as $movie)
        <tr>
        <td>{{$movie->title}}</td>
        <td>{{$movie->genre}}</td>
        <td>{{$movie->rating}}</td>
        </tr>
        @endforeach
</table>

@foreach ($comics as $comic)
    <div>
        <h3>{{$comic->title}}</h3>
        <img src="{{$comic->cover}}" alt="{{$comic->title}}">
    </div>
@endforeach
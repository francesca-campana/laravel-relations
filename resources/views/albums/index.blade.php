@extends ('layouts.app')
@section('main_content')

<h1>Lista album</h1>
<div>
  <ul>
    @foreach ($albums as $album)
      <li>
        <span>Titolo: {{ $album->title }}</span>
        <div>
          <img src="{{ $album->cover->url }}" alt="{{ $album->title }}">
        </div>
      </li>
      <a href="{{ route('albums.show', $album) }}">Mostra dettagli album</a>
      <hr>

    @endforeach
  </ul>


</div>

@endsection

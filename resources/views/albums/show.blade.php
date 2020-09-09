@extends ('layouts.app')
@section('main_content')

<div>
  <h1>{{ $album->title }}</h1>
  <h2>Artista: {{ $album->artist }} - Anno {{ $album->year }} </h2>
</div>

<div>
  <img src="{{ $album->cover->url }}" alt="{{ $album->title }}">
</div>

<div>
  <h2>Lista canzoni</h2>
  <ul>
    @foreach ($album->song as $song)
      <li>{{ $song->title }}</li>

    @endforeach
  </ul>

</div>
@endsection

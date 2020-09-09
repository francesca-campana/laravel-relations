@extends ('layouts.app')
@section('main_content')


<div class="banner">
  <h1>Lista album</h1>
</div>
<div class="lista-album">
  <ul class="album-item">

    @foreach ($albums as $album)
      <li>

        <div class="">
          <img src="{{ $album->cover->url }}" alt="{{ $album->title }}">
        </div>
        <h4 class="title">Titolo: {{ $album->title }}</h4>
        <a href="{{ route('albums.show', $album) }}">Mostra dettagli album</a>
      </li>



    @endforeach
  </ul>

</div>

@endsection

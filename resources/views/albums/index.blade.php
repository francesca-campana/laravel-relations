@extends ('layouts.app')
@section('main_content')


<div class="banner_fixed">
  <h1>Lista album</h1>
</div>

<div class="lista-album">
  <ul class="album-item">

    @foreach ($albums as $album)
      <li class="list_style">

        <div class="">
          <img src="{{ $album->cover->url }}" alt="{{ $album->title }}">
        </div>
        <h4 class="title">Titolo: {{ $album->title }}</h4>
        <div>
          <a href="{{ route('albums.show', $album) }}">Mostra dettagli album</a>
        </div>
        <div>
          <a href="{{ route('albums.edit', $album) }}">Modifica album</a>
        </div>

      </li>



    @endforeach
  </ul>

</div>

@endsection

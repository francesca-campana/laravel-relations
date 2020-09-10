@extends ('layouts.app')
@section('main_content')
<div class="banner show">
  <h1>{{ $album->title }}</h1>
  <h2>Artista: {{ $album->artist }} - Anno: {{ $album->year }} </h2>
</div>
{{-- @if(!$album->genres->isEmpty())
	<div>
		<h3>Categories</h3>
		<ul>
			@foreach ($album->genres as $genre)
				<li>{{ $genre->name }}</li>
			@endforeach
		</ul>
	</div>
@endif --}}


<div class="dettaglio">
  <div class="cover">
    <img src="{{ $album->cover->url }}" alt="{{ $album->title }}">
  </div>
  <div class="">
    <ul>
      @foreach ($album->genres as $genre)
        <li>
          <h3>Genere: {{ $genre->name}}</h3>
        </li>
      @endforeach
    </ul>

  </div>

  <div>
    <h2>Lista canzoni</h2>
    
    <ul>
      @foreach ($album->song as $song)
        <li>
          <h4>Titolo: {{ $song->title }}</h4>
        </li>

      @endforeach
    </ul>

  </div>

</div>
<a href="{{ route('albums.index') }}">Torna alla lista degli album</a>
@endsection

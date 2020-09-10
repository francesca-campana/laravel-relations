@extends ('layouts.app')
@section('main_content')

<h1>Modifica album</h1>

<form action="{{ route('albums.update', $album) }}" method="post">
	@csrf
	@method('PUT')

	<div>
		<label>Title</label>
		<input type="text" name="title" value="{{ $album->title }}">
	</div>
  <div>
		<label>Artista</label>
		<input type="text" name="title" value="{{ $album->artist }}">
	</div>

	<div>
		@foreach ($genres as $genre)
			<div>
				<input type="checkbox" name="genres[]" {{ ($album->genres->contains($genre)) ? 'checked' : '' }} value="{{ $genre->id }}">
				<span>{{ $genre->name }}</span>
			</div>
		@endforeach
	</div>

	<div>
		<input type="submit" value="Salva modifica">
	</div>
</form>
@endsection

<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
          'punk',
          'jazz',
          'rock',
          'blues',
          'country',
          'reggae',
          'rockabilly',
          'new-wave',
          'metal',
          'post-rock',
          'indie',
        ];

        foreach ($genres as $genre) {
          $new_genre = new Genre();
          $new_genre->name = $genre;
          $new_genre->save();
        };
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          AlbumsTableSeeder::class,
          SongsTableSeeder::class,
          CoversTableSeeder::class,
          GenresTableSeeder::class,

        ]);
    }
}

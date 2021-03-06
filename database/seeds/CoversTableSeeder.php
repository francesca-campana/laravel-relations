<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Cover;

class CoversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_cover = new Cover();
          $new_cover->url = $faker->imageUrl(300, 300);
          $new_cover->album_id = $i + 1;
          $new_cover->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $films = [
            [
                'name' => 'Atlantis',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Comedy',
                'image_path' => public_path('/img/atlantis.jpg'),
                'price' => 9.99,
            ],
            [
                'name' => 'Godzilla',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'Japan',
                'type' => 'Adventure',
                'image_path' => public_path('/img/godzilla.jpg'),
                'price' => 8.99,
            ],
            [
                'name' => 'Hunter Killer',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'Russia',
                'type' => 'Drama',
                'image_path' => public_path('/img/hunter-killer.jpg'),
                'price' => 9.99,
            ],
            [
                'name' => 'Jurney',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'USA',
                'type' => 'Action',
                'image_path' => public_path('/img/jurney.jpg'),
                'price' => 8.99,
            ],
            [
                'name' => 'Jurney 2',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'UK',
                'type' => 'Horror',
                'image_path' => public_path('/img/jurney2.jpg'),
                'price' => 9.99,
            ],
            [
                'name' => 'Star Wars',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'France',
                'type' => 'Thriller',
                'image_path' => public_path('/img/starwars.jpeg'),
                'price' => 8.99,
            ],
            [
                'name' => 'Supergirl',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Comedy',
                'image_path' => public_path('/img/supergirl.jpg'),
                'price' => 9.99,
            ],
            [
                'name' => 'Pirates of the Caribbean',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'Japan',
                'type' => 'Adventure',
                'image_path' => public_path('/img/pirates.jpg'),
                'price' => 7.99,
            ],
            [
                'name' => 'Batman',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Drama',
                'image_path' => public_path('/img/bat-man.jpg'),
                'price' => 10.00,
            ],
            [
                'name' => 'Jurasic Park',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'USA',
                'type' => 'Action',
                'image_path' => public_path('/img/jurasic-park.jpg'),
                'price' => 6.99,
            ],
            [
                'name' => 'Jurasic World',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Horror',
                'image_path' => public_path('/img/atlantis.jpg'),
                'price' => 19.99,
            ],
            [
                'name' => 'Mandalorian',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'France',
                'type' => 'Thriller',
                'image_path' => public_path('/img/mandalorian.jpg'),
                'price' => 8.99,
            ],
            [
                'name' => 'Transformer',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Comedy',
                'image_path' => public_path('/img/transformer.jpg'),
                'price' => 9.99,
            ],
            [
                'name' => 'Wanda',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'Japan',
                'type' => 'Adventure',
                'image_path' => public_path('/img/wanda.png'),
                'price' => 5.99,
            ],
            [
                'name' => 'Star Trek',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'Russia',
                'type' => 'Drama',
                'image_path' => public_path('/img/star-trek.jpg'),
                'price' => 4.99,
            ],
            [
                'name' => 'Resident Evil',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'USA',
                'type' => 'Action',
                'image_path' => public_path('/img/resident-evil.jpg'),
                'price' => 18.99,
            ],
            [
                'name' => 'Stranger Thing',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'UK',
                'type' => 'Horror',
                'image_path' => public_path('/img/stranger-thing.jpg'),
                'price' => 20.00,
            ],
            [
                'name' => 'End Game',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'France',
                'type' => 'Thriller',
                'image_path' => public_path('/img/end-game.jpg'),
                'price' => 8.99,
            ],
            [
                'name' => 'Star Trek',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Comedy',
                'image_path' => public_path('/img/start-trek.jpeg'),
                'price' => 9.99,
            ],
            [
                'name' => 'Avatar',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'Japan',
                'type' => 'Adventure',
                'image_path' => public_path('/img/avatar.jpg'),
                'price' => 15.99,
            ],
            [
                'name' => 'Penthouses',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'Russia',
                'type' => 'Drama',
                'image_path' => public_path('/img/penthouses.jpg'),
                'price' => 16.99,
            ],
            [
                'name' => 'Titans',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'USA',
                'type' => 'Action',
                'image_path' => public_path('/img/titans.jpg'),
                'price' => 17.99,
            ],
            [
                'name' => 'Wanda',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'UK',
                'type' => 'Horror',
                'image_path' => public_path('/img/wanda.webp'),
                'price' => 19.99,
            ],
            [
                'name' => 'The Falcon',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'France',
                'type' => 'Thriller',
                'image_path' => public_path('/img/the-falcon.webp'),
                'price' => 8.99,
            ],
            [
                'name' => 'Lord of Rings',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Comedy',
                'image_path' => public_path('/img/ring.jpg'),
                'price' => 6.99,
            ],
            [
                'name' => 'Scream',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'Japan',
                'type' => 'Adventure',
                'image_path' => public_path('/img/scream.jpg'),
                'price' => 7.99,
            ],
            [
                'name' => 'Dark',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'Russia',
                'type' => 'Drama',
                'image_path' => public_path('/img/dark.jpg'),
                'price' => 9.99,
            ],
            [
                'name' => 'The meg',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'USA',
                'type' => 'Action',
                'image_path' => public_path('/img/meg.jpg'),
                'price' => 10.99,
            ],
            [
                'name' => 'Dark Widow',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'UK',
                'type' => 'Action',
                'image_path' => public_path('/img/widow.jpg'),
                'price' => 11.99,
            ],
            [
                'name' => 'Life',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'France',
                'type' => 'Thriller',
                'image_path' => public_path('/img/life.jpg'),
                'price' => 12.99,
            ],
            [
                'name' => 'The godfather',
                'film_length' => 120,
                'release_date' => '2022-01-01',
                'country' => 'USA',
                'type' => 'Comedy',
                'image_path' => public_path('/img/godfather.jpg'),
                'price' => 12.99,
            ],
            [
                'name' => 'Harry Potter',
                'film_length' => 90,
                'release_date' => '2022-02-01',
                'country' => 'USA',
                'type' => 'Adventure',
                'image_path' => public_path('/img/harrypotter.jpg'),
                'price' => 16.99,
            ],
        ];

        foreach ($films as $film) {
            // Przechowaj zdjęcie w bazie danych jako MEDIUMBLOB
            $imageContents = file_get_contents($film['image_path']);

            DB::table('films')->insert([
                'name' => $film['name'],
                'film_length' => $film['film_length'],
                'release_date' => $film['release_date'],
                'country' => $film['country'],
                'type' => $film['type'],
                'image' => $imageContents,
                'price' => $film['price'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

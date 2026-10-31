<?php

namespace Database\Seeders;

use App\Models\Comic;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Lookup rows FIRST, each held in a variable
        $a = Genre::create(['name' => 'Action']);
        $b = Genre::create(['name' => 'Adventure']);
        $c = Genre::create(['name' => 'Thriller']);
        $d = Genre::create(['name' => 'Horror']);

        // 2. Comics, each pointing at a real genre id via variables and including price
        Comic::create([
            'title'        => 'One Piece Rissing Sun',
            'author'       => 'Eiichiro Oda',
            'year'         => 1997,
            'price'        => 9.99,
            'genre_id'     => $b->id,      // Adventure
            'is_completed' => false,
        ]);

        Comic::create([
            'title'        => 'Attack on Titan',
            'author'       => 'Hajime Isayama',
            'year'         => 2009,
            'price'        => 14.99,
            'genre_id'     => $a->id,      // Action
            'is_completed' => true,
        ]);

        Comic::create([
            'title'        => 'Naruto',
            'author'       => 'Masashi Kishimoto',
            'year'         => 1999,
            'price'        => 11.99,
            'genre_id'     => $b->id,      // Adventure
            'is_completed' => true,
        ]);

        Comic::create([
            'title'        => 'Death Note',
            'author'       => 'Tsugumi Ohba',
            'year'         => 2003,
            'price'        => 12.50,
            'genre_id'     => $c->id,      // Thriller
            'is_completed' => true,
        ]);

        Comic::create([
            'title'        => 'Chainsaw Man',
            'author'       => 'Tatsuki Fujimoto',
            'year'         => 2018,
            'price'        => 13.99,
            'genre_id'     => $d->id,      // Horror
            'is_completed' => false,
        ]);
    }
}
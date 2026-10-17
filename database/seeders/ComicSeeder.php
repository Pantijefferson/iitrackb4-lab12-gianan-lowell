<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;


class ComicSeeder extends Seeder
{
    public function run(): void
    {
        $comics = [
    [
        'title' => 'One Piece Rissing Sun',
        'author' => 'Eiichiro Oda',
        'year' => 1997,
        'genre' => 'Adventure',
        'is_completed' => false,
    ],
    [
        'title' => 'Attack on Titan',
        'author' => 'Hajime Isayama',
        'year' => 2009,
        'genre' => 'Action',
        'is_completed' => true,
    ],
    [
        'title' => 'Naruto',
        'author' => 'Masashi Kishimoto',
        'year' => 1999,
        'genre' => 'Adventure',
        'is_completed' => true,
    ],
    [
        'title' => 'Death Note',
        'author' => 'Tsugumi Ohba',
        'year' => 2003,
        'genre' => 'Thriller',
        'is_completed' => true,
    ],
    [
        'title' => 'Chainsaw Man',
        'author' => 'Tatsuki Fujimoto',
        'year' => 2018,
        'genre' => 'Horror',
        'is_completed' => false,
    ],
];
            
        

        foreach ($comics as $comic) {
            Comic::create($comic);
        }
    }
}

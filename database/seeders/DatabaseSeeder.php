<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $books = [
            ["David Baldacci",	"Skulden",	200],
            ["David Baldacci",	"Amos Decker Series",	400],
            ["David Baldacci",	"Archer Series",	450],
            ["David Baldacci",	"Atlee Pine Series",	400],
            ["Anna Karolina",	"Star dig ingen ater",	250],
            ["David Baldacci",	"Camel Club Series",	450],
            ["Dean Koontz",	"Jane Hawk",	100],
            ["Dean Koontz",	"Demon Seed",	150],
            ["Dean Koontz",	"Night Chills",	200],
            ["Dean Koontz",	"Whispers",	350],
            ["Dean Koontz",	"The Mask",	300],
            ["Dean Koontz",	"Phantoms",	400],
            ["Dean Koontz",	"Strangers",	350],
            ["Dean Koontz",	"Watchers",	350],
            ["Dean Koontz",	"Lightning",	300],
            ["Dean Koontz",	"Midnight",	250],
            ["Mans Kallentoft",	"Se mig falla", 	350],
            ["Markus Lutteman",	"Leon",	350],
            ["Markus Lutteman", "Floden",	200],
            ["Stephen King",	"Talismanen",	300]
        ];

        foreach ($books as $book) {
            $c = new \App\Models\Book();
            $c->author = $book[0];
            $c->title = $book[1];
            $c->price = $book[2];
            $c->save();
        }
    }
}

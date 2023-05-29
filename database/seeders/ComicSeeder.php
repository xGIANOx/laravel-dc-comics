<?php

namespace Database\Seeders;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');
        foreach ($comics as $single_comic) {
            $newComic = new Comic();
            $newComic->title = $single_comic['title'];
            $newComic->description = $single_comic['description'];
            $newComic->thumb = $single_comic['thumb'];
            $newComic->thumb = $single_comic['thumb'];
            $newComic->price = $single_comic['price'];
            $newComic->series = $single_comic['series'];
            $newComic->sale_date = $single_comic['sale_date'];
            $newComic->type = $single_comic['type'];
            $newComic->save();
        }
    }
}

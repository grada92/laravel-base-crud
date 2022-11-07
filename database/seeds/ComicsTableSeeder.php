<?php

use Illuminate\Database\Seeder;
use App\ComicsTable;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataComics = config('data.Comics');
        foreach($dataComics as $Comics){
            $newComics = new ComicsTable();
            $newComics->Titolo=$Comics['title'];
            $newComics->Description=$Comics['description'];
            $newComics->Copertina=$Comics['thumb'];
            $newComics->type=$Comics['type'];

            $newComics->save();
        }
    }
}

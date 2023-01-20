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
         $this->call(ComicSeeder::class);
        //cambiare la dicitura  $this->call(UserTableSeeder::class); con il nome del seeder
    }
}


//php artisan db:seed comando per riempire l databaase con le istanze create







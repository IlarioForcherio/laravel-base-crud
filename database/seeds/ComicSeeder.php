<?php
//collego il modello Comic
use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //associo a  $array_comics i dati presenti nel file config 'comics'  che popoleranno la tabella creata nella migration
        $array_comics = config('comics');

        //creo una nuova istanza del modello Comic (tante quanti gli elementi presenti nell'$array_comics)
        //popolo la tabella attribuendo agli attributi creati nella migration i valori delle chiavi presenti dentro l'array
        foreach($array_comics as $elem){

        $new_comic = new Comic();
        $new_comic->title = $elem['title'];
        $new_comic->description = $elem['description'];
        $new_comic->thumb = $elem['thumb'];
        $new_comic->price = $elem['price'];
        $new_comic->series = $elem['series'];
        $new_comic->sale_date = $elem['sale_date'];
        $new_comic->type = $elem['type'];
       //senza save non si salvano i dati nel database
        $new_comic->save();
        }

        //comando per popolare il database  php artisan db:seed



    }
}

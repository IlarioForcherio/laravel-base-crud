<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
   // associo a $table il valore della tabella del db comics (inizialmente non popolata)
   protected $table = 'comics';

    protected $fillable = [

        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
     ];

    //con fillable specifica quali colonne possono essere riempite, cosi che nel controller (es. store) si puo' usare il metodo fill(),senza riscrivere tutte le colonne e riassegnarle nuovamente
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
   // associo a $table il valore della tabella del db comics (inizialmente non popolata)
   protected $table = 'comics';
}

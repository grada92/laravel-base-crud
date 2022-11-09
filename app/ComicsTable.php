<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicsTable extends Model
{
    protected $fillable = ['Titolo','Copertina','type','Description'];
}

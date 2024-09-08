<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //Necessário para adição de dados no BD
    protected $fillable = ['code', 'name'];
}

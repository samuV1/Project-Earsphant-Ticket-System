<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    //Necessário para adição de dados no BD
    protected $fillable = ['code', 'sector_code', 'type', 'category', 'brand', 'model', 'license', 'aquisition'];
}

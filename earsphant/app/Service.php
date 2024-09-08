<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //Necessário para adição de dados no BD
    protected $fillable = ['name', 'status', 'sla'];
}

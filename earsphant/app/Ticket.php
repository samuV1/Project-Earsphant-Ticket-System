<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['code', 'user_login', 'sector_code', 'queue_code', 'service', 'subject', 'description', 'open', 'closed', 'sla'];
}

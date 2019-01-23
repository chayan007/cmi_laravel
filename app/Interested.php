<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Interested extends Model
{
    use Notifiable;

    protected $fillable= ['name', 'email', 'phone', 'message'];
}

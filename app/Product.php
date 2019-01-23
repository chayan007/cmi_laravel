<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    protected $fillable =['name', 'description', 'price', 'company_id', 'category_id', 'slug', 'img_1', 'img_2', 'img_3', 'brochure'];
}

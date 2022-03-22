<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','author','description','category','publisher','publishing_time','published_date','promotion_discount','cover_image','price',
        'qty'
    ];
}

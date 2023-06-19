<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adv extends Model
{
    use HasFactory;

    protected $table = 'adv';

    protected $fillable = ['name', 'price', 'bedrooms','bathrooms','storeys', 'garages'];
}

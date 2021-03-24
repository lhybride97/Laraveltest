<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'First_name', 'Last_name', 'email','phone',
        'name', 'email', 'logo', 'website'

    ];

    
}

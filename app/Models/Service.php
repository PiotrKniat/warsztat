<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Pozwalamy na masowe przypisywanie tych pól przy tworzeniu usługi
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_minutes',
    ];
}
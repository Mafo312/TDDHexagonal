<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testModel extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
    ];
    use HasFactory;

}
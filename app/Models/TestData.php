<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestData extends Model
{
    protected $table = 'test';

    protected $fillable = [
        'name'
    ];

    use HasFactory;
}

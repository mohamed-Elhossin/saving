<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';

    protected $fillable = ['key' , 'value' , 'category_id'];

    protected $casts = [
        'value' => 'array'
    ];

    public $timestamps = true;
}

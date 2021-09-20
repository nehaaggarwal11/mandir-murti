<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    
    public $table = 'media_category';

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'category_name'
    ];

}

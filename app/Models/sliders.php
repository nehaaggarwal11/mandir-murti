<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    use HasFactory;
    
    public $table = 'slider';

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'logo',
        'position'
    ];

}

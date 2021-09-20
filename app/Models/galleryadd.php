<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleryadd extends Model
{
    use HasFactory;

    public $table = 'gallery';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'logo',
        'category',
        
    ];

  
}

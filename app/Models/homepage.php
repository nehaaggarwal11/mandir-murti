<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    use HasFactory;

    public $table = 'homepage';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'website_name',
        'logo',
        'footer_text',
        'abt_heading',
        'abt_content',
        'created_at',
        'updated_at',
    ];

  
}

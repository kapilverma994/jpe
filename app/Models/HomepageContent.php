<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_name',
        'main_description',
        'short_description',
        'url',
        'image',
        'youtube_link'
    ];
}

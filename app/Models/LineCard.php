<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineCard extends Model
{
    use HasFactory;
    protected $fillable = ['logo', 'title', 'description', 'email', 'phone', 'url'];

    public function feature()
    {
        return $this->hasOne(LineCardFeature::class, 'line_card_id', 'id');
    }
}
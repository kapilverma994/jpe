<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LineCard;
class LineCardFeature extends Model
{
    use HasFactory;
    protected $fillable = ['line_card_id', 'feature'];

    protected $casts = [
        'feature' => 'array'
    ];
    protected $attribute = [
        'feature' => []
    ];
    
    public function line(){
        return $this->belongsTo(LineCard::class,'line_card_id','id');
    }
}
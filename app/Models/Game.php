<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'd_id',
        'publisher',
        'release_date',
        'price',
        'peak_player',
        'game_type'
    ];

    public function developer()
    {
        return $this->belongsTo('App\Models\Developer', 'd_id', 'id');
    }
    public function scopeSenior($query)
    {
        return $query->where('price', '>', 300)->orderBy('price', 'asc');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'publisher',
        'd_id',
        'release_date',
        'price',
        'peak_player',
        'game_type'
    ];

    public function Developer()
    {
        return $this->belongsTo('App\Models\Developer', 'd_id', 'id');
    }
}

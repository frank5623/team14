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
        'gametype'
    ];
    public function developer()
    {
        return $this->belongsTo('App\Models\Developer','d_id','id');
    }
    public function scopePopular($query,$number)
    {
        return $query->whereRaw("peak_player >= {$number} ORDER BY peak_player DESC");
    }
}

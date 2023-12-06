<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'found_date',
        'founder'
    ];

    public function games(){
        return $this->hasMany('App\Models\game','d_id');
    }
    public function delete(){
        $this->games()->delete();
        return parent::delete();
    }
}

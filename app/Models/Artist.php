<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function song(){
        return $this->hasMany('App\Models\Song');
    }

    public function album(){
        return $this->hasMany('App\Models\Album');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable=['name','musicID','artistID','description','lyrics','duration'];
    public function music(){
        return $this->belongsTo('App\Models\Music');
    }
    public function artist(){
        return $this->belongsTo('App\Models\Artist');
    }
}

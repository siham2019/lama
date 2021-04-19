<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
     'title','description','url_youtube','url_others','url_image','hour_begin','chaine_tv','url_trailer'
    ];
    use HasFactory;
      
     
        public function episodes()
        {
            return $this->hasMany(Episode::class);
        }
        public function actors()
        {
            return $this->belongsToMany(Actor::class);
        }
 
}

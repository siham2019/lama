<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

     protected $fillable=['name','image_url'];

    public function series()
    {
        return $this->belongsToMany(Serie::class);
    }
}

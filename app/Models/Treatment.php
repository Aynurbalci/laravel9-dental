<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Treatment extends Model
{
    use HasFactory;



    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function randevu(){
        return $this->hasMany(Randevu::class);
    }
}

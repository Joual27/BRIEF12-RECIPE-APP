<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name','instructions','image','category_id'];


    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}

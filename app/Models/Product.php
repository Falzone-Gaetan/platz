<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','text','authors_id','categories_id','filesize','download'];

    public function author(){
        return $this->belongsTo(\App\Models\Author::class,'authors_id');
    }

    public function comments(){
        return $this->hasMany(\App\Models\Comment::class,'products_id');
    }
    public function categories(){
        return $this->belongsTo(\App\Models\Category::class,'categories_id');
    }
    
    public static function getLimited($limit = 4)
    {
        return self::limit($limit)->get();
    }
}

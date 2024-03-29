<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['pseudo','text'];

    public function products(){
        return $this->belongsTo(\app\Models\Product::class,'products_id');
    }
}

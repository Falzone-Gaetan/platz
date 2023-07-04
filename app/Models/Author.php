<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function products() {
        return $this->hasMany(\App\Models\Product::class,'authors_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'content', 'image', 'posted', 'category_id'];
    public function category(){
        return $this->hasMany(Category::class);
    }
}
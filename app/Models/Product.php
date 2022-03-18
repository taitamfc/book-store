<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    public $fillable    = ['title','slug','image','description','price','status'];
    public $timestamps  = false;

    public function category(){
        return $this->belongsTo( Category::class,'category_id','id' );
    }
}

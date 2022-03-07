<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable    = ['title','slug','banner','parent_id','status'];
    public $timestamps  = false;

    public function sub_cats(){
        return $this->hasMany( self::class,'parent_id','id' );
    }
}

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

    public function parent(){
        return $this->belongsTo( self::class,'parent_id','id' );
    }

    function showCategoriesOptions($categories, $parent_id = 0, $char = '')
{
        foreach ($categories as $key => $item)
        {
            echo '<option value="'.$item->id.'">'. $char.$item->title.'</option>';
            // Nếu là chuyên mục con thì hiển thị
            if ($item->sub_cats)
            {
                $this->showCategories($item->sub_cats, $item->id, $char.'|---');
            }
        }
    }
}

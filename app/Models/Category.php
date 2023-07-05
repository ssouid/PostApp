<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',

        'name',
        'is_published',
        'parent_id',
       
    ];


    function posts()  {                                    

        return $this->hasMany( Post::class ) ;
 
    }

    function subCategories()  {                                    

        return $this->hasMany( Category::class , 'parent_id' ) ;
 
    }

    function parent()  {                                    

        return $this->belongsTo( Category::class , 'parent_id' ) ;
 
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'slug',
        'seo_keywords',
        'seo_description',
        'description',
        'image_thumbnail',
        'image_cover',
        'is_published',
        'created_by_id',
        'category_id',
        
    ];
    function Category()  {                                    

        return $this->belongsTo( Category::class ) ;
 
    }

    function user()  {                                    

        return $this->belongsTo( User::class ) ;
 
    }
}

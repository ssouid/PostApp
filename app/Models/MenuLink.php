<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'url',
        'parent_id',
        'is_active',
        'section_link_id',
        'position',
        'icon',
    
    ];

    function sectionlink()  {                                    

        return $this->belongsTo( SectionLink::class) ;
 
    }    

    function subMenuLinks()  {                                    

        return $this->hasMany( MenuLink::class  ) ;
 
    }

    function parent()  {                                    

        return $this->belongsTo( MenuLink::class, 'parent_id'  ) ;
 
    }



}

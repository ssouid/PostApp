<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'is_active',
        'position',
    ];
    function menulinks()  {                                    

        return $this->hasMany( MenuLink::class ) ;
 
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [

        'value',
        'comment',
        'is_published',
        'user_id',
    
    ];
    function user()  {                                    

        return $this->belongsTo( User::class ) ;
 
    }

}

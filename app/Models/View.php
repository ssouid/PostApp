<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;
    protected $fillable = [

        'view',
        'ip_address',
        'user_id',
    ];

    function user()  {                                    

        return $this->belongsTo( User::class) ;
 
    }    

}

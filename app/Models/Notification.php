<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [

        'notification_type',
        'is_read',
        'url',
        'text',
        'notifiable_id',
        'icon',
        'user_id',
    ];

    function user()  {                                    

        return $this->belongsTo( User::class ) ;
 
    }
}

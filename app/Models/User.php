<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'user_type',
        'status',
        'bio',
        'job_title',
       
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    function posts()  {                                    

        return $this->hasMany( Post::class , 'created_by_id') ;
 
    }        
    function notifications()  {                                    

        return $this->hasMany( Notification::class , 'notifiable_id') ;
 
    }   
    function comments()  {                                    

        return $this->morphMany( Post::class, 'comment' ) ;
 
    }   
    function reviews()  {                                    

        return $this->morphMany( Review::class, 'review' ) ;
 
    }    
    
    function views()  {                                    

        return $this->morphMany( view::class,'view' ) ;
 
    }  
}

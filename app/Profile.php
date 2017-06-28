<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'last_name', 'address']; 
    
    //Set the primary key
    protected $primary_key = 'user_id';

    //Prevents autoincrementing of the primary key
    public $incrementing = false; 

    public function getRouteKeyName()
    {
        return 'user_id';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

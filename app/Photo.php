<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path'];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

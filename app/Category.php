<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, Group::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function getPriceFormattedAttribute()
    {
        return round($this->price / 100);
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}

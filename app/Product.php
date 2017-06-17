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

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('qty');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('rating');
    }

    protected static function boot()
    {
        parent::boot();
        static::observe(\App\Observers\ProductObserver::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
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

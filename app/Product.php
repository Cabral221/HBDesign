<?php

namespace App;

use App\Image;
use App\Commande;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($p){
            $p->slug = Str::slug($p->libele);
        });
        
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}

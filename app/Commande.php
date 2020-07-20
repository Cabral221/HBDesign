<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['firstname','lastname','number','pointer','amount','product_id','stat','active'];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

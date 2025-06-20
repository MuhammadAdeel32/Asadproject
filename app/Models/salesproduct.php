<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class salesproduct extends Model
{
    protected $fillable=['sale_id','product_id','total','quantity','amount'];

    public function product()
{
    return $this->belongsTo(Product::class);
}
}

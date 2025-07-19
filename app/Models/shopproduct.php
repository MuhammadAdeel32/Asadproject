<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shopproduct extends Model
{
    protected $fillable=['product_id','description','quantity','price','thumbnail'];

    public function  product()
    {
        return $this->belongsTo(Product::class);
    }

}


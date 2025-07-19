<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\shopproduct;

class Stockmanagement extends Component
{


     public function deleteproduct($id)
    {
         $product = shopproduct::find($id);
        if ($product) {
            $product->delete();
        }
    }
     
    public function render()
    {
        $products=shopproduct::with(['product'])->get();
        return view('livewire.products.stockmanagement',compact('products'));
    }
}

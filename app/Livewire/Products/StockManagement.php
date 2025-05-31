<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class StockManagement extends Component
{


    public function deleteproduct($id)
    {
         $product = Product::find($id);
        if ($product) {
            $product->delete();
        }
    }

    public function render()

    {
        $categories=Category::all();
        $brands=Brand::all();
        $products=Product::all();

        return view('livewire.products.stock-management',compact('products','brands','categories'));
    }
}

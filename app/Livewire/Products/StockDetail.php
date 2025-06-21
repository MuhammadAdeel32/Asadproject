<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
class StockDetail extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product=Product::with(['category','brand'])->findOrFail($id);
    }

    public function render()
    {
        
        return view('livewire.products.stock-detail');
    }
}

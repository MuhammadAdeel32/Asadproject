<?php

namespace App\Livewire\Houseware;
use App\Models\Product;
use Livewire\Component;

class Stockdetail extends Component
{

      public $product;

    public function mount($id)
    {
        $this->product=Product::with(['category','brand'])->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.houseware.stockdetail');
    }
}

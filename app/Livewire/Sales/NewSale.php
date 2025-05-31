<?php

namespace App\Livewire\Sales;
use App\Models\Product;
use App\Models\Customer;
use Livewire\Component;

class NewSale extends Component
{
    public function render()
    {
        $products=Product::all();
        $customers=Customer::all();
        return view('livewire.sales.new-sale',compact('products','customers'));
    }
}

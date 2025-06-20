<?php

namespace App\Livewire\Sales;

use Livewire\Component;
use App\Models\Sale;
use App\Models\SalesProduct;

class History extends Component
{
    public $sales;
     public $sale;


    public function mount()
    {
        $this->sales = Sale::with('customer')->latest()->get();
    }


    public function deleteSale($id)
    {
        Sale::find($id)?->delete();
        $this->sales = Sale::with('customer')->latest()->get();
    }

    public function render()
    {
        return view('livewire.sales.history');
    }
}

<?php

namespace App\Livewire\Sales;

use Livewire\Component;
use App\Models\Sale;
use App\Models\salesproduct;

class Saledetail extends Component
{

    public $saleId;
    public $selectedSaleProducts = [];
    public $selectedSale;

    public function mount($id)
    {
        $this->saleId=$id;

    }

    public function render()
    {

     $this->selectedSale = Sale::find($this->saleId);
    $this->selectedSaleProducts = salesproduct::with('product')->where('sale_id', $this->saleId)->get();
        return view('livewire.sales.saledetail');
    }
}

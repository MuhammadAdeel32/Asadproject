<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Customer;
use App\Models\User;

class Dashboard extends Component
{

      public  $totalproducts;
      public $totalsales;
      public $totalcustomers;
      public $totalusers;


     public function mount()
        {
        $this->totalproducts = Product::count();
        $this->totalsales=Sale::count();
        $this->totalcustomers = Customer::count();
        $this->totalusers = User::count();

        }

    public function render()
    {
        return view('livewire.dashboard')->layout('components.layouts.app');
    }
}

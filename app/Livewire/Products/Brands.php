<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Brand;

class Brands extends Component
{
    public $title;

    public function resetInputFields()
    {
        $this->title = '';
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string',
        ]);

        Brand::create([
            'title' => $this->title,
        ]);

        $this->resetInputFields();

        return redirect()->route('products.brand');
    }

    public function render()
    {
        $brands=Brand::all();
        return view('livewire.products.brands',compact('brands'));
    }
}

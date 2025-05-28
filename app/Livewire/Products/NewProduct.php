<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class NewProduct extends Component
{
    use WithFileUploads;

    public $category_id;
    public $brand_id;
    public $title;
    public $description;
    public $price;
    public $quantity;
    public $thumbnail;

    public function Add()
    {
        $this->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

     $logopath = null;
      if ($this->thumbnail) {
    $logopath = $this->thumbnail->store('thumbnail', 'public');
     }
        Product::create([
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'thumbnail' => $logopath,
        ]);

        session()->flash('success', 'Product added successfully!');

        $this->reset(['category_id', 'brand_id', 'title', 'description', 'price', 'quantity', 'thumbnail']);
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('livewire.products.new-product', compact('categories', 'brands'));
    }
}

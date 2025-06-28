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
    public $totalproducts;

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

        


        $imageName = 'product_' . time() . '.jpg';
        $finalImagePath = null;

    if ($this->thumbnail) {
        $finalImagePath = $this->thumbnail->storeAs('thumbnail', $imageName, 'public');
    }
    else {
        $this->addError('photo', 'Image could not be saved.');
        return;
    }

        // Now use Object based Query
        $product = new Product();
        $product->category_id = $this->category_id;
        $product->brand_id = $this->brand_id;
        $product->title = $this->title;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->quantity = $this->quantity;
        $product->thumbnail = $finalImagePath;
        $product->save();

        session()->flash('success', 'Product added successfully!');

        $this->reset(['category_id', 'brand_id', 'title', 'description', 'price', 'quantity', 'thumbnail']);
    }


   

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('livewire.products.new-product', compact('categories', 'brands',));
    }
}

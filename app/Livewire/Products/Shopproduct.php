<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\shopproduct as shopproductModel;
use App\Models\Product;
use Livewire\WithFileUploads;

class Shopproduct extends Component
{
    use WithFileUploads;

    public $product_id;
    public $description;
    public $price;
    public $quantity;
    public $thumbnail;
    public $totalproducts;

    public function Add()
    {
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // ✅ Get the original product from warehouse
        $warehouseProduct = Product::find($this->product_id);

        // ✅ Check stock
        if ($this->quantity > $warehouseProduct->quantity) {
            $this->addError('quantity', 'Not enough stock in warehouse.');
            return;
        }

        // ✅ Subtract warehouse stock
        $warehouseProduct->quantity -= $this->quantity;
        $warehouseProduct->save();

        // ✅ Save thumbnail if uploaded
        $finalImagePath = null;
        if ($this->thumbnail) {
            $imageName = 'product_' . time() . '.' . $this->thumbnail->getClientOriginalExtension();
            $finalImagePath = $this->thumbnail->storeAs('thumbnail', $imageName, 'public');
        }

        // ✅ Add product to shop
        $product = new shopproductModel();
        $product->product_id = $this->product_id;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->quantity = $this->quantity;
        $product->thumbnail = $finalImagePath;
        $product->save();

        session()->flash('success', 'Product added to shop and warehouse stock updated!');

        $this->reset(['product_id', 'description', 'price', 'quantity', 'thumbnail']);
    }

    public function render()
    {
        $products = Product::all();

        return view('livewire.products.shopproduct', compact('products'));
    }
}

<?php

namespace App\Livewire\Sales;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\SalesProduct;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class NewSale extends Component
{
    public $products, $customers;
    public $product_id, $customer_id, $quantity;
    public $cart = [];

    public function mount()
    {
        $this->products = Product::all();
        $this->customers = Customer::all();
    }

    public function addSale()
    {
        $this->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($this->product_id);

        // Check stock
        if ($product->quantity < $this->quantity) {
            $this->addError('quantity', 'Not enough stock available');
            return;
        }

        $this->cart[] = [
            'product_id' => $product->id,
            'product_name' => $product->title,
            'price' => $product->price,
            'quantity' => $this->quantity,
            'subtotal' => $product->price * $this->quantity,
        ];

        // Reset fields
        $this->product_id = null;
        $this->quantity = null;
    }

    public function removeItem($index)
    {
        unset($this->cart[$index]);
        $this->cart = array_values($this->cart);
    }

    public function getTotal()
    {
        return collect($this->cart)->sum('subtotal');
    }

    public function saveSale()
    {
        if (count($this->cart) == 0) {
            session()->flash('error', 'No products added');
            return;
        }

        DB::beginTransaction();
        try {
            $sale = Sale::create([
                'customer_id' => $this->customer_id,
                'total' => $this->getTotal(),
                'discount' => 0,
                'final' => $this->getTotal(),
                'status' => 1,
            ]);

            foreach ($this->cart as $item) {
                SalesProduct::create([
                    'sale_id' => $sale->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'total' => $item['subtotal'],
                ]);

                // Deduct stock
                $product = Product::find($item['product_id']);
                $product->quantity -= $item['quantity'];
                $product->save();
            }

            DB::commit();
            $this->cart = [];
            $this->customer_id = null;

            session()->flash('success', 'Sale Completed Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Something went wrong');
        }
    }

    public function render()
    {
        return view('livewire.sales.new-sale');
    }
}

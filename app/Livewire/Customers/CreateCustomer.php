<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name;
    public $email;
    public $address;
    public $phone;
    public $totalcustomers;

    
    public function customersave()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'nullable|email', // <-- email is now optional
            'phone' => 'required|numeric',
            'address' => 'required|string',
        ]);

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            // 'photo' => $finalImagePath, // comment/remove this if not used
        ]);

        $this->reset(['name', 'email', 'phone', 'address']);
        session()->flash('message', 'Customer Saved Successfully');
    }

    public function render()
    {
        $customers=Customer::all();
        return view('livewire.customers.create-customer',compact('customers'));
    }


    public function customerDelete($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->delete();
        }
    }
}

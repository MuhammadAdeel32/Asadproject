<?php

namespace App\Livewire\Houseware;

use App\Models\Brand as BrandModel;
use Livewire\Component;
class Brand extends Component
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

        BrandModel::create([
            'title' => $this->title,
        ]);

        $this->resetInputFields();

        return redirect()->route('warehouse.brand');
    }


    public function deletebrand($id)
    {
        $brand=BrandModel::find($id);

        if($brand){
            if($brand->products->count() == 0){
                 $brand->delete();
                 session()->flash('warning','Brand Deleted Succesfully');
            } else {
                session()->flash('warning','Brand has products, Please delete them first');
            }
        }
    }


    public function render()
    {
        $brands=BrandModel::all();
        return view('livewire.houseware.brand',compact('brands'));
    }
    
}

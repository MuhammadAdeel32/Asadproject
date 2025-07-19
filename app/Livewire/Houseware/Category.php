<?php

namespace App\Livewire\Houseware;
use  App\Models\Category as CategoryModel;
use Livewire\Component;

class Category extends Component
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

        CategoryModel::create([
            'title' => $this->title,
        ]);

        $this->resetInputFields();

        return redirect()->route('warehouse.category');
    }
 
      
     public function deletecategory($id)
    {
        $category=CategoryModel::find($id);

        if($category){
            if($category->products->count() == 0){
                $category->delete();
                session()->flash('warning','Category Deleted Succesfully');
            } else {
                session()->flash('warning','Category has products, please delete them first');
            }
        }
    }


    public function render()
    {
        $categories=CategoryModel::all();
        return view('livewire.houseware.category',compact('categories'));
    }

}

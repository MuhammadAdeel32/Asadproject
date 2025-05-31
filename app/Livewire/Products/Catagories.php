<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Category;

class Catagories extends Component
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

        Category::create([
            'title' => $this->title,
        ]);

        $this->resetInputFields();

        return redirect()->route('products.category');
    }
 
      
     public function deletebrand($id)
    {
        $category=Category::find($id);

        if($category){
        $category->delete();
        }
    }


    public function render()
    {
        $categories=Category::all();
        return view('livewire.products.catagories',compact('categories'));
    }
}

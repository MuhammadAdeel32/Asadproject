<?php

namespace App\Livewire;

use  App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Setting extends Component
{


      public $current_password;
      public $new_password;
      public $confirm_new_password;

         protected $rules=[
            'current_password'=>'required|min:8',
            'new_password'=>'required|min:8',
            'confirm_new_password' => 'required|same:new_password|min:8'
         ];


         public function resetInputFields()
         {
            $this->current_password ='';
            $this->new_password ='';
            $this->confirm_new_password ='';
         }

         public function  change()
         {

           $this->validate();

           $user=Auth::user();

           if(!Hash::check($this->current_password,$user->password)){
            session()->flash('error','The Current Password is incorrect');
            return;
           }
           
           $user->update([
            'password'=> Hash::make($this->new_password),
           ]);

           $this->resetInputFields();
           session()->flash('message','Your Password Updated successfully');
         }


    public function render()
    {
        return view('livewire.setting');
    }
}

<?php

namespace App\Livewire\Users;

use Livewire\Component;
use  App\Models\User;

class AllUsers extends Component
{

    public $totalusers;
    public function deleteuser($id)
    {
        $user=User::find($id);
        if($user)
        {
            $user->delete();
        }
    }

    
    public function render()
    {

        $users=User::all();
        return view('livewire.users.all-users',compact('users'));
    }
}

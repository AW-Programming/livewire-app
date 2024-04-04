<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Admin\AdminComponent;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;



class ListUsers extends AdminComponent
{
    

    public $state =[];

    public $user;

    public $showEditModel = false;

    public $userIdBeingRemoved = null;

    public function addNew()
    {
     $this->state = [];

      $this->dispatch('show-form');
      
      $this->showEditModel = false;  
    }
    public function createUser() 
{
    $validateData=Validator::make($this->state, [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ])->validate();

    $validatedData['password'] = bcrypt($validateData['password']);
  
    User::create($validateData);

    $this->dispatch('hide-form');

    
   
}

public function edit(User $user)
{
    $this->showEditModel = true;

    $this->user = $user;

    $this->state = $user->toArray();

    $this->dispatch('show-form'); 
}
public function updateUser()
{
    $validateData=Validator::make($this->state, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' .$this->user->id,
        'password' => 'sometimes|confirmed',
    ])->validate();

     if(!empty($validateData['password'])) {
       $validateData['password'] = bcrypt($validateData['password']);
     }

     $this->user->update($validateData);


     $this->dispatch('hide-form-edit');

   
}

public function confirmUserRemoval($userId)
{
    $this->userIdBeingRemoved = $userId;

    $this->dispatch('show-delete-model');
}

public function deleteUser() 
{
  $user = User::findOrFail($this->userIdBeingRemoved);
  
  $user->delete();

  $this->dispatch('hide-delete-modal');


}
public function render()
    {
        $users = User::latest()->paginate(5);

        return view('livewire.admin.users.list-users', [
            'users' => $users,
        ])->layout('layouts.app');
    }
}

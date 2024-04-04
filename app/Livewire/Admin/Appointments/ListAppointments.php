<?php

namespace App\Livewire\Admin\Appointments;

use App\Livewire\Admin\AdminComponent;



class ListAppointments extends AdminComponent
{

   

    public function render()
    {
        return view('livewire.admin.appointments.list-appointments', [

        ])->layout('layouts.app');
    }
}

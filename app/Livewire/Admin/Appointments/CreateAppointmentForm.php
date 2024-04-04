<?php

namespace App\Livewire\Admin\Appointments;

use App\Models\Appointment;
use App\Models\Client;
use Livewire\Component;



class CreateAppointmentForm extends Component
{
    public $state = [];

    public function createAppointment()
    {
       //validate

       $this->state['status'] = 'open';

       Appointment::create($this->state);
      
       $this->dispatch('alert',['message' => 'Appoinment created successfully!']);

    }

    public function render()
    {

        $clients = Client::all();

        return view('livewire.admin.appointments.create-appointment-form', [
            'clients' => $clients,

            ])->layout('layouts.app');
    }
}

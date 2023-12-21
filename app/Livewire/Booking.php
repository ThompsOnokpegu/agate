<?php

namespace App\Livewire;

use App\Models\Appointment;
use Livewire\Component;

class Booking extends Component
{
    public $consultation;
    public $measurement;
    public $fitting;
    public $pickup;
    public $phone;
    public $first_name;
    public $last_name;
    public $email;
    public $note;
    public $appointment_date;
    public $appointment_time;

    public function render()
    {
        return view('livewire.booking');
    }

    public function bookAppointment(){
        $services = [
            'consultation' => $this->consultation,
            'measurement' => $this->measurement,
            'fitting' => $this->fitting,
            'pickup' => $this->pickup,
        ];

        $hasService = false;

        foreach ($services as $service){
            if($service){
                $hasService = true;
                break;
            }
        }

       $data = $this->validate([
            'phone' => 'required|min:11|max:14',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'appointment_date' => 'required|after:today',
            'appointment_time' => 'required',
            'note' => 'nullable',            
        ]);

        if(!$hasService){
            return session()->flash('services','Select one or more services!');
        }

        $bookingServices = json_encode($services);
        
        $booking = new Appointment();

        $booking->services = $bookingServices;
        $booking->phone = $data['phone'];
        $booking->first_name = $data['first_name'];
        $booking->last_name = $data['last_name'];
        $booking->email = $data['email'];
        $booking->appointment_date = $data['appointment_date'];
        $booking->appointment_time = $data['appointment_time'];
        $booking->note = $data['note'];

        $booked = $booking->save();

        if($booked){
            $this->reset();
            //todo: send email
            return session()->flash('booked','Your appointment was booked successfully!');
        }

    }
}

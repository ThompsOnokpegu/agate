<?php

namespace App\Livewire;

use App\Mail\AppointmentBooked;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Booking extends Component
{
    //services
    public $initial_consultation;
    public $measurement;
    public $alteration_and_fitting;
    public $pickup_appointment;
    public $external;
    //b2b services
    public $button_tacking;
    public $button_hole_making;
    public $ironing_and_packaging;
    //personal info
    public $phone;
    public $first_name;
    public $last_name;
    public $email;
    public $note;
    //date & time
    public $appointment_date;
    public $appointment_time;

    public function render()
    {
        return view('livewire.booking');
    }

    public function bookAppointment(){
        $data = $this->validate([
            'phone' => 'required|min:11|max:14',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'appointment_date' => 'required|after:today',
            'appointment_time' => 'required',
            'note' => 'nullable',            
        ]);
        
        $servicesValidation = [
            'initial_consultation' => $this->initial_consultation,
            'measurement' => $this->measurement,
            'alteration_and_fitting' => $this->alteration_and_fitting,
            'pickup_appointment' => $this->pickup_appointment,
            'external' => $this->external,
        ];

        $b2bValidation = [
            'button_hole_making' => $this->button_hole_making,
            'button_tacking' => $this->button_tacking,
            'ironing_and_packaging' => $this->ironing_and_packaging,
        ];

        $hasServices = false;
        $services = [];
        foreach ($servicesValidation as $key => $value){
            if($value){                   
                $hasServices = true;
                $services[$key] = $value;
            }
        }
        if(!$hasServices){
            return session()->flash('services','Select one or more services!');
        }
       
        $hasB2b = false;
        $b2bs = [];
        foreach ($services as $key => $value){
            if($key == "external"){
                foreach($b2bValidation as $b2b => $b2bvalue){
                    if($b2bvalue){
                        $hasB2b = true;
                        $b2bs[$b2b] = $value;
                    }
                }
                if(!$hasB2b){
                    return session()->flash('b2b','Select one or more B2B services!');
                }else{
                    $services['external'] = $b2bs;
                }
            }
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

            Mail::to([$booking->email])
            ->bcc(['info@agateclothing.com'])
            ->later(now()->addMinutes(5), new AppointmentBooked($booking));
           
            return session()->flash('booked','Your appointment was booked successfully!');
        }

    }
}

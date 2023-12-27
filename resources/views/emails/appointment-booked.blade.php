@php
use Carbon\Carbon;
$dt = Carbon::parse($appointment->appointment_date." ".$appointment->appointment_time);

$b2bs = [];
$services = json_decode($appointment->services);
foreach ($services as $key => $service) {
if($key=="external"){
foreach ($service as $key => $value) {
$b2bs[]= $key;
}
}
}
@endphp
@component('mail::message')
Hi <em><strong>{{ $appointment->first_name }}</strong></em>,<br>

Thank you for your interest in our services!
# Your Appoinment Details
Full Name: <strong>{{ $appointment->first_name.' '.$appointment->last_name }}</strong><br>
Email Address: <strong>{{ $appointment->email }}</strong><br>
Phone: <strong>{{ $appointment->phone }}</strong><br>
Appointment Date: <strong>{{ $dt->toDayDateTimeString()}}</strong><br>
# Required Services

@foreach($services as $key => $value)
@if($key!="external")
{{ ucwords(str_replace('_',' ',$key)) }}
<br>
@endif
@endforeach
@if($b2bs)
@foreach($b2bs as $b2b)
{{ ucwords(str_replace('_',' ',$b2b)) }}
<br>
@endforeach
@endif
<br>
Regards,
<br>
{{ config('app.name') }}
@endcomponent
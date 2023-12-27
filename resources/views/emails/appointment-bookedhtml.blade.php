@extends('layouts.emails')
@section('mail')
    <section class="max-w-2xl px-6 mx-auto bg-white dark:bg-gray-900">
        <header>
            {{-- <a href="#">
                <img class="w-auto h-12" src="https://agateclothing.com/appointment/agate-logo.png" alt="">
            </a> --}}
        </header>

        <main class="mt-8">
            <h2 class="text-gray-700 dark:text-gray-200">Hi {{ $appointment->first_name }},</h2>

            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                Your appointment was booked with <span class="font-semibold ">Agate Clothing</span>.
            </p>

            <h2 class="mb-2 mt-3 text-lg font-semibold text-gray-900 dark:text-white">Appoinment Details:</h2>
            <dl class="mb-10 max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                <div class="flex flex-col py">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Full Name</dt>
                    <dd class="text-lg font-semibold">{{ $appointment->first_name.' '.$appointment->last_name }}</dd>
                </div>
                <div class="flex flex-col py-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                    <dd class="text-lg font-semibold">{{ $appointment->email }}</dd>
                </div>
                <div class="flex flex-col py-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone Number</dt>
                    <dd class="text-lg font-semibold">{{ $appointment->phone }}</dd>
                </div>
                <div class="flex flex-col py-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Appointment Date</dt>
                    <dd class="text-lg font-semibold">{{ $appointment->appointment_date .' | '.$appointment->appointment_time }}</dd>
                </div>
                
                <h2 class="mb-2 mt-3 text-lg font-semibold text-gray-900 dark:text-white">Services Needed:</h2>
                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    @php
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
                    @foreach($services as $key => $value)
                        @if($key!="external")
                            <li>{{ ucfirst($key) }}</li>
                        @endif   
                    @endforeach
                    @if($b2bs)
                        {{-- <li>B2B Services</li> --}}
                        @foreach($b2bs as $b2b)
                            <li class="ml-10 list-none">
                            {{ ucfirst(str_replace('_',' ',$b2b)) }}
                            </li>
                        @endforeach
                    @endif
                </ul>

            </dl>

            
            <a href="{{ route('home') }}" class="px-6 py-3 mt-8 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-sky-500 hover:bg-sky-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                Cancel Appointment
            </a>
            
            <p class="mt-10 text-gray-600 dark:text-gray-300">
                Regards, <br>
                Agate Clothing Team
            </p>
        </main>
        

        <footer class="mt-8">
            <p class="text-gray-500 dark:text-gray-400">
                This email was sent to <a href="#" class="text-blue-600 hover:underline dark:text-blue-400" target="_blank">{{ $appointment->email }}</a>. 
            </p>

            <p class="mt-3 text-gray-500 dark:text-gray-400">© 2024 Agate Group LLC. All Rights Reserved.</p>
        </footer>
    </section>
@endsection
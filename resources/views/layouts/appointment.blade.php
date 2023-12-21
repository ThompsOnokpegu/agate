<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Agate Ready to Wear - Makurdi, Nigeria.</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>

      <div class="bg-white">
        <div class="relative isolate px-6 lg:px-8">        
          <div class="mx-auto max-w-2xl mt-5 sm:py-2 lg:py-10">
            <a href="#"><img src="{{ asset('appointment/agate-logo.png') }}" width="52" alt=""></a>
            <div class="text-center py-5">
              <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Bespoke Tailoring by <a href="#" class="font-semibold text-sky-400"><span class="absolute inset-0" aria-hidden="true"></span>Agate Clothing </a>
              </div>
            </div>
            
            <div class="text-center">
              <h1 class="text-2xl font-bold tracking-tight text-gray-800">Thank you for your interest!</h1>
              <p class="text-lg leading-6 text-gray-600">Please use this form to tell us about your appointment</p>
            </div>
            <div class="py-10">
              <img class="rounded-lg" src="{{ asset('appointment/agate-clothing-booking2.jpg') }}" alt="">
            </div>
            <div>
              <div class="text-left flex items-center justify-center gap-x-6">
                @yield('content')
              </div>
            </div>
          </div>     
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
    </body>
</html>

  
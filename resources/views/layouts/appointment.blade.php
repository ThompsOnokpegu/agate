<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
          
          <div class="mx-auto max-w-2xl py-1 sm:py-2 lg:py-10">
            <a href="#"><img src="{{ asset('agate-logo.png') }}" width="58" alt=""></a>
            <div class="text-center py-5">
              <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Bespoke Tailoring by <a href="#" class="font-semibold text-sky-400"><span class="absolute inset-0" aria-hidden="true"></span>Agate Clothing </a>
              </div>
            </div>
            <div class="text-center">
              <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Tell us about your appointment</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600">If for any reason we cannot treat your appointment on your chosen date, we'll automatically move you to the top of the list for the next available date.</p>
            </div>
            <div>
              <div class="text-left mt-10 flex items-center justify-center gap-x-6">
                @yield('content')
              </div>
            </div>
          </div>     
        </div>
      </div>
      @livewireScripts
    </body>
</html>

  
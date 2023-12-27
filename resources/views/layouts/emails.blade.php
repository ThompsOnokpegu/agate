<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                <div class="mx-auto max-w-2xl mt-5 sm:py-2 lg:py-5">            
                    <div>
                        <div class="text-left flex items-center justify-center gap-x-6">
                            @yield('mail')
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </body>
</html>

  
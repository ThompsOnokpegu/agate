
<form method="POST">
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        
        <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Choose a Service:</h3>
        <ul class="grid w-full gap-6">
            <li>
                <input type="checkbox" id="consultation" value="" class="hidden peer" required="">
                <label for="consultation" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-sky-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                        <div class="w-full text-lg font-semibold">Initial Consultation <small>(15 min.)</small></div>
                        <div class="w-full text-sm">Learn more about the process, options, and pricing. No measurements are taken.</div>
                    </div>
                </label>
            </li>
            <li>
                <input id="measurement" wire:model="measurement" value="" type="checkbox" class="hidden peer">
                <label for="measurement" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-sky-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="block">
                        <div class="w-full text-lg font-semibold">Measurement & Purchase <small>(20 min.)</div>
                        <div class="w-full text-sm">When you're ready to place an order, we'll take your full measurement
                          and guide you through the design process. We'll collect full payment for the order.</div>
                    </div>
                </label>
            </li>
            <li>
                <input id="fitting" wire:model="fitting" type="checkbox" class="hidden peer">
                <label for="fitting" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-sky-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="block">
                        <div class="w-full text-lg font-semibold">Fitting <small>(30 min.)</div>
                        <div class="w-full text-sm">We'll make simple adjustments to the design so it conforms correctly to your body shape.</div>
                    </div>
                </label>
            </li>
            <li class="mt-6">
                <input id="pickup" wire:model="pickup" type="checkbox" class="hidden peer">
                <label for="pickup" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-sky-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="block">
                        <div class="w-full text-lg font-semibold">Pick-up Appointment <small>(10 min.)</div>
                        <div class="w-full text-sm">When your garment is ready, you can choose to pick it up in a 10-minute appointment.</div>
                    </div>
                </label>
            </li>
        </ul>
      </div>
      <div class="text-base mt-5">
          <h2 class="text-base font-semibold leading-7 text-gray-900">Select your prefered date & time.</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">Choose a date from tomorrow.</p>
          
          <div class="mt-2 grid grid-cols-2">
            <div class="col-span-2">
              <div class="relative mb-1">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                </div>
                <input type="date" wire:model="appointment_date" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full ps-14 md:ps-12 p-2.9 md:p-2.5" placeholder="name@flowbite.com">
               
              </div>
              @error('appointment_date')
              <div>
                  <span class="text-sm font-normal text-red-500">{{ $message }}</span>
              </div>
              @enderror
            </div>
            <div class="col-span-2">
              <div class="relative mb-1">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <input type="time" wire:model="appointment_time" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full ps-14 md:ps-12 p-2.9 md:p-2.5" placeholder="name@flowbite.com">
               
              </div>
              @error('appointment_time')
              <div>
                  <span class="text-sm font-normal text-red-500">{{ $message }}</span>
              </div>
              @enderror
            </div>
          </div>
      </div> 
      <div class="border-gray-900/10 pb-12 mt-5">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Please enter your personal information below.</p>
  
        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-5 sm:grid-cols-6">
          
          <div class="col-span-2">
              <div class="relative mt-1">
                  
                  <input type="text" placeholder="Phone Number" wire:model="phone" id="phone" aria-describedby="helper-text-explanation" class="text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-3.5 md:p-2.5">
                  @error('phone')
                    <div>
                        <span class=" text-sm font-normal text-red-500">{{ $message }}</span>
                    </div>
                  @enderror
              </div>
          </div>
          <div class="col-span-2">
            <div class="mt-1">
              <input type="text" placeholder="First Name" wire:model="first_name" id="first-name" autocomplete="given-name" class="text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-3.5 md:p-2.5">
              @error('first_name')
                <div>
                    <span class="text-sm font-normal text-red-500">{{ $message }}</span>
                </div>
              @enderror
            </div>
          </div>
          <div class="col-span-2">
            <div class="mt-1">
              <input type="text" placeholder="Last Name" wire:model="last_name" id="last-name" autocomplete="family-name" class="text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-3.5 md:p-2.5">
              @error('last_name')
                <div>
                    <span class="text-sm font-normal text-red-500">{{ $message }}</span>
                </div>
              @enderror
            </div>
          </div>
        </div>
        <div class="grid mt-5 gap-y-5">
          
          <div class="col-span-full">
            <div class="mt-1">
              <input type="text" placeholder="Email Address" wire:model="email" id="email" autocomplete="street-address" class="text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-3.5 md:p-2.5">
              @error('email')
                <div>
                    <span class="text-sm font-normal text-red-500">{{ $message }}</span>
                </div>
              @enderror
            </div>
          </div>
          <div class="col-span-full">
            <div class="mt-1">
              <textarea id="note" wire:model="note" rows="3" placeholder="Appointment Note (optional)" class="text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-3.5 md:p-2.5"></textarea>
              
            </div>
          </div>          
        </div>
      </div> 
    </div>
    
    @if(session()->has('booked'))
      <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 role="alert">
        {{ session('booked') }}
      </div>
    @endif
    
    <div class="text-center" wire:loading>
      <div role="status">
          <svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-sky-400" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
              <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
          </svg>
          <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div class="mt-4 mb-6 flex items-center justify-end gap-x-6" wire:loading.remove>
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button wire:click.prevent="bookAppointment" type="submit" class="rounded-none bg-sky-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500">Book Appointment</button>
    </div>
</form>

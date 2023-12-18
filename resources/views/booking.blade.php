@extends('layouts.appointment')

@section('content')
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form>
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Select one or more services</h2>  
        <div class=" space-y-10">
          <fieldset>
            <div class="mt-6 space-y-6">
              <div class="relative flex gap-x-3">
                <div class="flex h-6 items-center">
                  <input value="Initial Consultation" id="consultation" name="consultation" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-500 focus:ring-sky-500">
                </div>
                <div class="text-sm leading-6">
                  <label for="consultation" class="font-medium text-gray-900">Initial Consultation</label>
                </div>
              </div>
              <div class="relative flex gap-x-3">
                <div class="flex h-6 items-center">
                  <input value="Measurement & Purchase" id="measurement" name="measurement" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-500 focus:ring-sky-500">
                </div>
                <div class="text-sm leading-6">
                  <label for="measurement" class="font-medium text-gray-900">Measurement & Purchase</label>
                </div>
              </div>
              <div class="relative flex gap-x-3">
                <div class="flex h-6 items-center">
                  <input value="Fitting" id="fitting" name="fitting" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-500 focus:ring-sky-500">
                </div>
                <div class="text-sm leading-6">
                  <label for="fitting" class="font-medium text-gray-900">Fitting</label>
                </div>
              </div>
              <div class="relative flex gap-x-3">
                <div class="flex h-6 items-center">
                  <input value="Alterations" id="alterations" name="alterations" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-500 focus:ring-sky-500">
                </div>
                <div class="text-sm leading-6">
                  <label for="alterations" class="font-medium text-gray-900">Alterations</label>
                </div>
              </div>
              <div class="relative flex gap-x-3">
                <div class="flex h-6 items-center">
                  <input value="Alterations & Pickup" id="pickup" name="pickup" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-500 focus:ring-sky-500">
                </div>
                <div class="text-sm leading-6">
                  <label for="pickup" class="font-medium text-gray-900">Alterations & Pickup</label>
                </div>
              </div>
            </div>
          </fieldset>
          <div class="sm:col-span-2">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Select your prefered date.</h2>
            <div class="mt-1">
              <input type="date" name="appointment-date" id="appointment-date" autocomplete="appointment-date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>
      </div> 
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Enter your details below to help us learn about your visit.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="col-span-2">
              
              <div class="mt-1">
                <input type="text" placeholder="Phone" name="phone" id="phone" autocomplete="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:text-sm sm:leading-6">
              </div>
          </div>
          <div class="col-span-2">
            <div class="mt-1">
              <input type="text" placeholder="First Name" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-2">
            <div class="mt-1">
              <input type="text" placeholder="Last Name" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-full">
            <div class="mt-1">
              <input type="text" placeholder="Email Address" name="email" id="email" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-full">
            <div class="mt-1">
              <textarea id="note" name="note" rows="3" placeholder="Appointment Note (optional)" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:text-sm sm:leading-6"></textarea>
            </div>
          </div>
        </div>
      </div>
  
      
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-sky-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500">Book Appointment</button>
    </div>
  </form>
  
@endsection

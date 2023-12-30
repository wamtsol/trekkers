<!doctype html>
<html>
<head>
   <meta charset="UTF-8" />
   <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>    
   @vite('resources/js/app.js')
   @vite('resources/css/app.css')
   @vite('resources/css/style.css')
   @vite('resources/js/custom.js')
   @vite('resources/js/mychart.js')
   @vite('node_modules/slick-carousel/slick/slick.js')
   @vite('node_modules/slick-carousel/slick/slick.css')
   @vite('node_modules/slick-carousel/slick/slick-theme.css')
   
   <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="{{ isset($bodyClass) ? $bodyClass : '' }}">
<header x-data="{ isOpen: false }" x-init="console.log(isOpen)" class="absolute inset-x-0 top-0 z-50 home-page">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:py-8 lg:px-0" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Trekers.pk</span>
          <img class="h-8 w-auto" src="./assets/logo-while.png" alt="">
        </a>
      </div>
      <div class="flex lg:hidden" role="dialog" aria-modal="true">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 text-white"
          @click="isOpen = !isOpen">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-white">Home</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-white">About Us</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-white">Trip</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-white">Region</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-white">Contact Us</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="isOpen">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10" @click="isOpen = false"></div>
      <div 
        class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 translate-x-1">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="isOpen = false">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Product</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <header x-data="{ isOpen: false }" x-init="console.log(isOpen)" class="inner-page relative inset-x-0 top-0 z-50 bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:py-6 lg:px-3" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Trekers.pk</span>
          <img class="h-8 w-auto" src="./assets/logo.png" alt="">
        </a>
      </div>
      <div class="flex lg:hidden" role="dialog" aria-modal="true">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 text-black"
          @click="isOpen = !isOpen">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-black">Home</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-black">About Us</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-black">Trip</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-black">Region</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-black">Contact Us</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="isOpen">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10" @click="isOpen = false"></div>
      <div 
        class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 translate-x-1">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="isOpen = false">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Product</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-black">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>








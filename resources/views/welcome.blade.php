<!doctype html>
<html>
<head>
   <meta charset="UTF-8" />   
   @vite('resources/css/app.css')
   @vite('resources/css/style.css')
   @vite('resources/js/app.js')
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Trekers.pk</span>
          <img class="h-8 w-auto" src="./assets/logo-while.png" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
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
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-white">Products</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-white">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-white">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 text-white">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>
<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu min-h-screen" aria-hidden="true">
      <div class="relative sliderImg">
        <img src="./assets/slider-img.jpeg" />
      </div>
    </div>
    <div class="pt-20 sm:pt-40 lg:pt-40 pb-20 sm:pb-20 lg:pb-20">
      <div class="text-center mx-auto lg:w-3/6 md:w-3/6 w-5/6 mb-12">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl text-white">Discover A Beautiful Place With Us</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600 text-white">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
      </div>
      <div class="mx-auto lg:w-4/6 md:w-4/6 w-6/6 bg-white p-4 grid grid-cols-5 gap-4 mb-3">
        <div class="lg:col-span-2 md:col-span-2 col-span-5 search-field p-3">
          <label for="trip"><img src="./assets/trip-icon.svg" /></label>
          <input type="text" name="text" id="trip" placeholder="What kind of trip are you looking for?"/>
        </div>
        <div class="lg:col-span-2 md:col-span-2 col-span-5 search-field p-3">
          <label for="location"><img src="./assets/trip-location.svg" /></label>
          <input type="text" name="text" id="location" placeholder="When do you want to go?"/>
        </div>
        <div class="search-field-button rounded-sm lg:col-span-1 md:col-span-1 col-span-5">
          <a href="#">Show holidays</a>
        </div>
      </div>
      <div class="mx-auto lg:w-4/6 md:w-4/6 w-6/6">
        <div class="search-tag-heading">
          <h2>Quick Search</h2>
        </div>
        <div class="search-tag flex flex-wrap gap-2">
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Hindu Kush Range</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Himalayas</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Baltoro Glacier</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Gondogoro La Trek</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">K2 Base Camp</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Trekking</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Mountaineering</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Skiing and Snowboarding</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Rock Climbing</a>
          <a href="#" class="rounded-sm bg-white block px-3 py-1">Ice Climbing</a>
        </div>
      </div>
    </div>
  </div>
  <div class="md:container mx-auto px-8 z-50 relative main-container">  
    <div class="grid mb-3">
      <div class="heading">
        <h2>Adventures places</h2>
      </div>
    </div> 
    <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
      <div class="adv_item w-full h-full">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
          <div class="adv_review">
            <img src="./assets/star.svg"/>
            <span>4.5</span>
          </div>
        </div>
        <div class="adv_box">
          <div class="adv_date">
            10<span>DAY</span>
          </div>
          <div class="adv_icon">
            <span><img src="./assets/icon1.svg"/></span>
            <span><img src="./assets/icon2.svg"/></span>
            <span><img src="./assets/icon3.svg"/></span>
            <span><img src="./assets/icon4.svg"/></span>
          </div>
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="adv_location">
              <img src="./assets/map-pin.svg"/>
              <span>Hunza Valley</span>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <div class="adv_price">$250<span>/Per Person</span>
            </div>
            <a href="#">Book Now</a>
          </div>
        </div>
      </div>
      <div class="adv_item w-full h-full">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
          <div class="adv_review">
            <img src="./assets/star.svg"/>
            <span>4.5</span>
          </div>
        </div>
        <div class="adv_box">
          <div class="adv_date">
            10<span>DAY</span>
          </div>
          <div class="adv_icon">
            <span><img src="./assets/icon1.svg"/></span>
            <span><img src="./assets/icon2.svg"/></span>
            <span><img src="./assets/icon3.svg"/></span>
            <span><img src="./assets/icon4.svg"/></span>
          </div>
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="adv_location">
              <img src="./assets/map-pin.svg"/>
              <span>Hunza Valley</span>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <div class="adv_price">$250<span>/Per Person</span>
            </div>
            <a href="#">Book Now</a>
          </div>
        </div>
      </div>
      <div class="adv_item w-full h-full">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
          <div class="adv_review">
            <img src="./assets/star.svg"/>
            <span>4.5</span>
          </div>
        </div>
        <div class="adv_box">
          <div class="adv_date">
            10<span>DAY</span>
          </div>
          <div class="adv_icon">
            <span><img src="./assets/icon1.svg"/></span>
            <span><img src="./assets/icon2.svg"/></span>
            <span><img src="./assets/icon3.svg"/></span>
            <span><img src="./assets/icon4.svg"/></span>
          </div>
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="adv_location">
              <img src="./assets/map-pin.svg"/>
              <span>Hunza Valley</span>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <div class="adv_price">$250<span>/Per Person</span>
            </div>
            <a href="#">Book Now</a>
          </div>
        </div>
      </div>
      <div class="adv_item w-full h-full">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
          <div class="adv_review">
            <img src="./assets/star.svg"/>
            <span>4.5</span>
          </div>
        </div>
        <div class="adv_box">
          <div class="adv_date">
            10<span>DAY</span>
          </div>
          <div class="adv_icon">
            <span><img src="./assets/icon1.svg"/></span>
            <span><img src="./assets/icon2.svg"/></span>
            <span><img src="./assets/icon3.svg"/></span>
            <span><img src="./assets/icon4.svg"/></span>
          </div>
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="adv_location">
              <img src="./assets/map-pin.svg"/>
              <span>Hunza Valley</span>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <div class="adv_price">$250<span>/Per Person</span>
            </div>
            <a href="#">Book Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="grid mb-10">
      <div class="readMore">
        <a href="#">View All Packages</a>
      </div>
    </div> 
    <div class="grid mb-3">
      <div class="heading">
        <h2>Activities</h2>
      </div>
    </div> 
    <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
      <div class="adv_item Act_item">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
        </div>
        <div class="adv_box">
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="reviews">
              <span>8.0</span>
              Superb. 140 Review
            </div>
            <div class="advTag">
              <a href="#">K2</a>
              <a href="#">Nanga Parbat</a>
              <a href="#">Gasherbrum</a>
              <a href="#">Broad Peak</a>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <a href="#">Book Now</a>
            <div class="adv_sucess">$250<span>/Per Person</span>
            </div>
          </div>
        </div>
      </div>
      <div class="adv_item Act_item">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
        </div>
        <div class="adv_box">
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="reviews">
              <span>8.0</span>
              Superb. 140 Review
            </div>
            <div class="advTag">
              <a href="#">K2</a>
              <a href="#">Nanga Parbat</a>
              <a href="#">Gasherbrum</a>
              <a href="#">Broad Peak</a>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <a href="#">Book Now</a>
            <div class="adv_sucess">$250<span>/Per Person</span>
            </div>
          </div>
        </div>
      </div>
      <div class="adv_item Act_item">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
        </div>
        <div class="adv_box">
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="reviews">
              <span>8.0</span>
              Superb. 140 Review
            </div>
            <div class="advTag">
              <a href="#">K2</a>
              <a href="#">Nanga Parbat</a>
              <a href="#">Gasherbrum</a>
              <a href="#">Broad Peak</a>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <a href="#">Book Now</a>
            <div class="adv_sucess">$250<span>/Per Person</span>
            </div>
          </div>
        </div>
      </div>
      <div class="adv_item Act_item">
        <div class="adv_img">
          <img src="./assets/productslideritem.png"/>
        </div>
        <div class="adv_box">
          <div class="adv_container">
            <h3>Biafo Glacier Ice Climbing</h3>
            <div class="reviews">
              <span>8.0</span>
              Superb. 140 Review
            </div>
            <div class="advTag">
              <a href="#">K2</a>
              <a href="#">Nanga Parbat</a>
              <a href="#">Gasherbrum</a>
              <a href="#">Broad Peak</a>
            </div>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
          </div>
          <div class="adv_footer">
            <a href="#">Book Now</a>
            <div class="adv_sucess">$250<span>/Per Person</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid mb-10">
      <div class="readMore">
        <a href="#">View All Packages</a>
      </div>
    </div> 
    
    <div class="sm:flex-1 xl:flex lg:flex md:flex gap-10 mb-10 bg-white tour_box">
      <div class="w-full xl:w-5/12 lg:w-5/12 md:w-5/12">
        <div class="upcomingEventImage">
          <img src="./assets/upcomingEvent.jpg"/>
        </div>
      </div>
      <div class="w-full xl:w-7/12 lg:w-7/12 md:w-7/12 lg:pt-10 mb-10">
        <div class="upcomingEventDetails sm:px-10 sm:py-10">
            <span>Up Comming Trip</span>
            <h2>Up Comming Trip</h2>
            <p>Biafo Glacier is a shocking 63-kilometer-long glacial mass situated in the Karakoram mountain scope of Pakistan. It is viewed as one of the longest and biggest icy masses outside the polar areas. The icy mass is a well-known objective among experienced searchers, particularly ice climbers, because of its difficult territory and shocking perspectives.</p>
            <div class="adv_timer">
              <div class="adv_day">
                <span>Day</span>
                06
              </div>
              <div class="adv_month">
                <span>Month</span>
                06
              </div>
              <div class="adv_years">
                <span>Years</span>
                2023
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="grid mb-3">
      <div class="heading">
        <h2>Activities</h2>
      </div>
    </div> 
    <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
      <div class="adv_item Act_item adv_profile">
        <div class="adv_img">
          <img src="../../assets/productslideritem.png"/>
        </div>
        <div class="adv_profile_box">
            <div class="user_profile">
              <div class="user_profile_img"><img src="../../assets/profile_img.jpg" /></div>
              <div class="user_profile_name_info">
                <div class="user_name">
                  <span>User Name</span>
                </div>
                <div class="user_status">
                  <span>Tour Guide</span>
                </div>
                <div class="user_reviews">
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  /5
                </div>
              </div>
            </div>
            <div class="user_profile_location">
              <div class="user_from user_pro_box">
                <div class="user_form_icon">From</div>
                <div class="user_form_text">Pakistan</div>
              </div>
              <div class="user_guide user_pro_box">
                <div class="user_guide_icon">Guide Since</div>
                <div class="user_guide_text">2023</div>
              </div>
              <div class="user_trip user_pro_box">
                <div class="user_trip_icon">Next Trip</div>
                <div class="user_trip_text">Newyork</div>
              </div>
            </div>
            <div class="user_profile_exp">
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Exprience</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="8 0" value="70" class="progress w-75">at 50/100</meter>
                    <label for="fuel">70</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Venture</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="30" class="progress w-75">at 50/100</meter>
                    <label for="fuel">30</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Trip Knowledge</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="50" class="progress w-75">at 50/100</meter>
                    <label for="fuel">50</label>
                  </span>
                </div>
              </div>
            </div>
            <div class="user_footer">
              <div class="user_avb">Available</div>
              <button mat-flat-button>View Profile</button>
            </div>
        </div>
      </div>  
      <div class="adv_item Act_item adv_profile">
        <div class="adv_img">
          <img src="../../assets/productslideritem.png"/>
        </div>
        <div class="adv_profile_box">
            <div class="user_profile">
              <div class="user_profile_img"><img src="../../assets/profile_img.jpg" /></div>
              <div class="user_profile_name_info">
                <div class="user_name">
                  <span>User Name</span>
                </div>
                <div class="user_status">
                  <span>Tour Guide</span>
                </div>
                <div class="user_reviews">
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  /5
                </div>
              </div>
            </div>
            <div class="user_profile_location">
              <div class="user_from user_pro_box">
                <div class="user_form_icon">From</div>
                <div class="user_form_text">Pakistan</div>
              </div>
              <div class="user_guide user_pro_box">
                <div class="user_guide_icon">Guide Since</div>
                <div class="user_guide_text">2023</div>
              </div>
              <div class="user_trip user_pro_box">
                <div class="user_trip_icon">Next Trip</div>
                <div class="user_trip_text">Newyork</div>
              </div>
            </div>
            <div class="user_profile_exp">
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Exprience</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="8 0" value="70" class="progress w-75">at 50/100</meter>
                    <label for="fuel">70</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Venture</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="30" class="progress w-75">at 50/100</meter>
                    <label for="fuel">30</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Trip Knowledge</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="50" class="progress w-75">at 50/100</meter>
                    <label for="fuel">50</label>
                  </span>
                </div>
              </div>
            </div>
            <div class="user_footer">
              <div class="user_avb">Available</div>
              <button mat-flat-button>View Profile</button>
            </div>
        </div>
      </div>  
      <div class="adv_item Act_item adv_profile">
        <div class="adv_img">
          <img src="../../assets/productslideritem.png"/>
        </div>
        <div class="adv_profile_box">
            <div class="user_profile">
              <div class="user_profile_img"><img src="../../assets/profile_img.jpg" /></div>
              <div class="user_profile_name_info">
                <div class="user_name">
                  <span>User Name</span>
                </div>
                <div class="user_status">
                  <span>Tour Guide</span>
                </div>
                <div class="user_reviews">
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  /5
                </div>
              </div>
            </div>
            <div class="user_profile_location">
              <div class="user_from user_pro_box">
                <div class="user_form_icon">From</div>
                <div class="user_form_text">Pakistan</div>
              </div>
              <div class="user_guide user_pro_box">
                <div class="user_guide_icon">Guide Since</div>
                <div class="user_guide_text">2023</div>
              </div>
              <div class="user_trip user_pro_box">
                <div class="user_trip_icon">Next Trip</div>
                <div class="user_trip_text">Newyork</div>
              </div>
            </div>
            <div class="user_profile_exp">
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Exprience</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="8 0" value="70" class="progress w-75">at 50/100</meter>
                    <label for="fuel">70</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Venture</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="30" class="progress w-75">at 50/100</meter>
                    <label for="fuel">30</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Trip Knowledge</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="50" class="progress w-75">at 50/100</meter>
                    <label for="fuel">50</label>
                  </span>
                </div>
              </div>
            </div>
            <div class="user_footer">
              <div class="user_avb">Available</div>
              <button mat-flat-button>View Profile</button>
            </div>
        </div>
      </div>  
      <div class="adv_item Act_item adv_profile">
        <div class="adv_img">
          <img src="../../assets/productslideritem.png"/>
        </div>
        <div class="adv_profile_box">
            <div class="user_profile">
              <div class="user_profile_img"><img src="../../assets/profile_img.jpg" /></div>
              <div class="user_profile_name_info">
                <div class="user_name">
                  <span>User Name</span>
                </div>
                <div class="user_status">
                  <span>Tour Guide</span>
                </div>
                <div class="user_reviews">
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  <span><img src="../../assets/star.svg"/></span>
                  /5
                </div>
              </div>
            </div>
            <div class="user_profile_location">
              <div class="user_from user_pro_box">
                <div class="user_form_icon">From</div>
                <div class="user_form_text">Pakistan</div>
              </div>
              <div class="user_guide user_pro_box">
                <div class="user_guide_icon">Guide Since</div>
                <div class="user_guide_text">2023</div>
              </div>
              <div class="user_trip user_pro_box">
                <div class="user_trip_icon">Next Trip</div>
                <div class="user_trip_text">Newyork</div>
              </div>
            </div>
            <div class="user_profile_exp">
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Exprience</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="8 0" value="70" class="progress w-75">at 50/100</meter>
                    <label for="fuel">70</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Venture</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="30" class="progress w-75">at 50/100</meter>
                    <label for="fuel">30</label>
                  </span>
                </div>
              </div>
              <div class="user_profile_exp_box user_exp_box">
                <div class="user_profile_exp_text">Trip Knowledge</div>
                <div class="user_profile_exp_bar">
                  <span class="exp-bar">
                    <meter id="fuel" min="0" max="100" low="33" high="70" optimum="80" value="50" class="progress w-75">at 50/100</meter>
                    <label for="fuel">50</label>
                  </span>
                </div>
              </div>
            </div>
            <div class="user_footer">
              <div class="user_avb">Available</div>
              <button mat-flat-button>View Profile</button>
            </div>
        </div>
      </div>  
    </div>
    <div class="grid mb-10">
      <div class="readMore">
        <a href="#">View All Packages</a>
      </div>
    </div> 
    <div class="grid mb-3">
      <div class="heading">
        <h2>Stories</h2>
      </div>
    </div> 
    <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-10">
      <div class="testimonial">
          <div class="testimonial_inn">
            <div class="testimonial-img"><img src="../../assets/text-img.png"/></div>
            <div class="testimonial-details">
              <h2>Lorem ipsum, or lipsum as it is sometimes known</h2>
              <div class="tagAndDate">
                <a href="#">climbing</a>- December 20, 2023
              </div>
              <p>According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.</p>
            </div>
          </div>
          <div class="testimonial_user_details">
              <div class="testimonial_user_img"><img src="../../assets/profile_img.jpg"/></div>
              <div class="testimonial_user_name">
                <p>Lorem ipsum dolor</p>
                <span>Lorem ipsum dolor</span>
              </div>
          </div>
        </div>
        <div class="testimonial">
          <div class="testimonial_inn">
            <div class="testimonial-img"><img src="../../assets/text-img.png"/></div>
            <div class="testimonial-details">
              <h2>Lorem ipsum, or lipsum as it is sometimes known</h2>
              <div class="tagAndDate">
                <a href="#">climbing</a>- December 20, 2023
              </div>
              <p>According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.</p>
            </div>
          </div>
          <div class="testimonial_user_details">
              <div class="testimonial_user_img"><img src="../../assets/profile_img.jpg"/></div>
              <div class="testimonial_user_name">
                <p>Lorem ipsum dolor</p>
                <span>Lorem ipsum dolor</span>
              </div>
          </div>
        </div>
        <div class="testimonial">
          <div class="testimonial_inn">
            <div class="testimonial-img"><img src="../../assets/text-img.png"/></div>
            <div class="testimonial-details">
              <h2>Lorem ipsum, or lipsum as it is sometimes known</h2>
              <div class="tagAndDate">
                <a href="#">climbing</a>- December 20, 2023
              </div>
              <p>According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.</p>
            </div>
          </div>
          <div class="testimonial_user_details">
              <div class="testimonial_user_img"><img src="../../assets/profile_img.jpg"/></div>
              <div class="testimonial_user_name">
                <p>Lorem ipsum dolor</p>
                <span>Lorem ipsum dolor</span>
              </div>
          </div>
        </div>
        <div class="testimonial">
          <div class="testimonial_inn">
            <div class="testimonial-img"><img src="../../assets/text-img.png"/></div>
            <div class="testimonial-details">
              <h2>Lorem ipsum, or lipsum as it is sometimes known</h2>
              <div class="tagAndDate">
                <a href="#">climbing</a>- December 20, 2023
              </div>
              <p>According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.</p>
            </div>
          </div>
          <div class="testimonial_user_details">
              <div class="testimonial_user_img"><img src="../../assets/profile_img.jpg"/></div>
              <div class="testimonial_user_name">
                <p>Lorem ipsum dolor</p>
                <span>Lorem ipsum dolor</span>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <div class="footer z-10 relative">
      <div class="md:container mx-auto px-8">  
        <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
            <div class="footer_section">
                <div class="footer_logo"><img src="./assets/footer_trakker.png"/></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
            </div>
            <div class="footer_section">
                <h3>Keep in Touch</h3>
                <div class="footer_menu">
                    <a href="#">About Us</a>
                    <a href="#">Contributor</a>
                    <a href="#">Traking</a>
                    <a href="#">Contact Us</a>
                </div>
            </div>
            <div class="footer_section">
                <h3>Contact Info</h3>
                <div class="footer_contact_details">
                    <div class="contact_info">
                        <address>Lorem Ipsum is simply dummy text of the printing.</address>
                    </div>
                    <div class="contact_info">
                        <a href="tel:#">0123  4567 890</a>
                    </div>
                </div>
            </div>
            <div class="footer_section">
                <h3>Social Info</h3>
                <div class="footer_contact_details">
                    <div class="contact_social">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="social_icon">
                        <a href="#"><img src="./assets/fb.png"/></a>
                        <a href="#"><img src="./assets/tw.png"/></a>
                        <a href="#"><img src="./assets/in.png"/></a>
                        <a href="#"><img src="./assets/ing.png"/></a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>
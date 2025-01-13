@include('header')
<div class="trip-container">
    <div class="trip_header w-full h-64  overflow-hidden" dir="rtl">
        <img class="trip_header h-full w-full object-cover" src="./assets/unsplash_Fn27DlI8bZ8.png"/> 
        <div class="absolute transform -translate-y-1/2 top-56 w-full">
            <div class="m-auto container px-3">
                <div class="trip_des_inn z-50 w-full lg:my-16 md:my-16 py-6 px-6 opacity-80 rounded-lg text-center text-white">
                    <h1>Find The Best</h1>
                </div> 
            </div>
        </div> 
    </div>
    <div class="container mx-auto flex flex-wrap mb-6 px-3 mx-auto w-5/6 bg-white p-4 grid grid-cols-5 gap-4 mb-3 -mt-9 relative z-50">
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
      <div class="container mx-auto w-5/6 mb-6">
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
      <div class="container mx-auto w-full mb-6">
          <div class="grid grid-cols-3 gap-4 px-3">
              <div class="prebuilt-package bg-white p-4 flex gap-5 items-center">
                  <img src="./assets//prebuilt-package-1.png"/>
                  <div class="prebuilt-package-details">
                      <h3>Package for Hunza</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
                  <a href="javascript:void(0);"><img src="./assets/right_icon1.svg" /></a>
              </div>
              <div class="prebuilt-package bg-white p-4 flex gap-5 items-center">
                  <img src="./assets//prebuilt-package-2.png"/>
                  <div class="prebuilt-package-details">
                      <h3>Package for Lahore</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
                  <a href="javascript:void(0);"><img src="./assets/right_icon1.svg" /></a>
              </div>
              <div class="prebuilt-package bg-white p-4 flex gap-5 items-center">
                  <img src="./assets//prebuilt-package-3.png"/>
                  <div class="prebuilt-package-details">
                      <h3>Package for Islamabad</h3>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                  </div>
                  <a href="javascript:void(0);"><img src="./assets/right_icon1.svg" /></a>
              </div>
          </div>
       </div>
    <div class="container mx-auto flex flex-wrap pb-6">
    <div class="md:container mx-auto px-3 z-50 relative">
      <div class="grid mb-3">
        <div class="heading">
          <h2>Guides Profile</h2>
        </div>
      </div> 
      <div class="guide slider grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
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
      <div class="md:container mx-auto px-3 z-50 relative">
        <div class="grid mb-3">
          <div class="heading">
            <h2>Trips</h2>
          </div>
      </div> 
      <div class="guide slider grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/dinner.svg"/>
                  Menu
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/dinner.svg"/>
                  Menu
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/dinner.svg"/>
                  Menu
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/dinner.svg"/>
                  Menu
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/dinner.svg"/>
                  Menu
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/dinner.svg"/>
                  Menu
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/dinner.svg"/>
                  Menu
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
      </div>
      <div class="grid mb-10">
        <div class="readMore">
          <a href="#">View All Packages</a>
        </div>
      </div> 
      <div class="md:container mx-auto px-3 z-50 relative">
        <div class="grid mb-3">
          <div class="heading">
            <h2>Accommodation</h2>
          </div>
      </div> 
      <div class="guide slider grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/star_active.png"/>
                  5 Star
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <div class="facilities">
                <span>
                  <img src="./assets/hotal1.svg"/>
                  5-star hotel
                </span>
                <span>
                  <img src="./assets/hotel2.svg"/>
                  Free breakfast
                </span>
                <span>
                  <img src="./assets/hotel3.svg"/>
                  Wi-Fi
                </span>
                <span>
                  <img src="./assets/hotel4.svg"/>
                  Free Parking
                </span>
                <span>
                  <img src="./assets/hotel5.svg"/>
                  Air conditioning
                </span>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/star_active.png"/>
                  5 Star
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <div class="facilities">
                <span>
                  <img src="./assets/hotal1.svg"/>
                  5-star hotel
                </span>
                <span>
                  <img src="./assets/hotel2.svg"/>
                  Free breakfast
                </span>
                <span>
                  <img src="./assets/hotel3.svg"/>
                  Wi-Fi
                </span>
                <span>
                  <img src="./assets/hotel4.svg"/>
                  Free Parking
                </span>
                <span>
                  <img src="./assets/hotel5.svg"/>
                  Air conditioning
                </span>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/star_active.png"/>
                  5 Star
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <div class="facilities">
                <span>
                  <img src="./assets/hotal1.svg"/>
                  5-star hotel
                </span>
                <span>
                  <img src="./assets/hotel2.svg"/>
                  Free breakfast
                </span>
                <span>
                  <img src="./assets/hotel3.svg"/>
                  Wi-Fi
                </span>
                <span>
                  <img src="./assets/hotel4.svg"/>
                  Free Parking
                </span>
                <span>
                  <img src="./assets/hotel5.svg"/>
                  Air conditioning
                </span>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/star_active.png"/>
                  5 Star
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <div class="facilities">
                <span>
                  <img src="./assets/hotal1.svg"/>
                  5-star hotel
                </span>
                <span>
                  <img src="./assets/hotel2.svg"/>
                  Free breakfast
                </span>
                <span>
                  <img src="./assets/hotel3.svg"/>
                  Wi-Fi
                </span>
                <span>
                  <img src="./assets/hotel4.svg"/>
                  Free Parking
                </span>
                <span>
                  <img src="./assets/hotel5.svg"/>
                  Air conditioning
                </span>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/star_active.png"/>
                  5 Star
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <div class="facilities">
                <span>
                  <img src="./assets/hotal1.svg"/>
                  5-star hotel
                </span>
                <span>
                  <img src="./assets/hotel2.svg"/>
                  Free breakfast
                </span>
                <span>
                  <img src="./assets/hotel3.svg"/>
                  Wi-Fi
                </span>
                <span>
                  <img src="./assets/hotel4.svg"/>
                  Free Parking
                </span>
                <span>
                  <img src="./assets/hotel5.svg"/>
                  Air conditioning
                </span>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
        <div class="adv_item Act_item acc_item">
          <div class="adv_img">
            <img src="./assets/productslideritem.png"/>
            <div class="like_icon">
              <img src="./assets/like_icon.png"/>
            </div>
            <div class="level">Level One</div>
          </div>
          <div class="adv_box">
            <div class="adv_container">
              <div class="headingWithStar">
                <h3>Regent Plaza</h3>
                <div class="star_rating">
                  <img src="./assets/star_active.png"/>
                  5 Star
                </div>
              </div>
              <div class="sponsoredAndRating">
                <p><span>Sponsored</span>Form Hotels.com</p>
                <div class="hotel_rating">
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="like"></span>
                  <span class="unlike"></span>
                  <span class="unlike"></span>
                  <p>/ 8,637 reviews</p>
                </div>
              </div>
              <div class="facilities">
                <span>
                  <img src="./assets/hotal1.svg"/>
                  5-star hotel
                </span>
                <span>
                  <img src="./assets/hotel2.svg"/>
                  Free breakfast
                </span>
                <span>
                  <img src="./assets/hotel3.svg"/>
                  Wi-Fi
                </span>
                <span>
                  <img src="./assets/hotel4.svg"/>
                  Free Parking
                </span>
                <span>
                  <img src="./assets/hotel5.svg"/>
                  Air conditioning
                </span>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>View offer</a>
            </div>
          </div>
        </div>
      </div>
      <div class="grid mb-10">
        <div class="readMore">
          <a href="#">View All Packages</a>
        </div>
      </div> 
      <div class="guides-package-row package-tour mb-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-4 package-tour-container">
          <div class="package-tour-container-inn p-10">
            <h2>All Pakistan Tour Packages</h2>
            <div class="adv_icon">
              <span><img src="./assets/icon1.svg"></span>
              <span><img src="./assets/icon2.svg"></span>
              <span><img src="./assets/icon3.svg"></span>
              <span><img src="./assets/icon4.svg"></span>
            </div>
            <div class="advTag">
              <button mat-stroked-button>K2</button>
              <button mat-stroked-button>Nanga Parbat</button>
              <button mat-stroked-button>Gasherbrum</button>
              <button mat-stroked-button>Broad Peak</button>
            </div>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button mat-flat-button>View Details</button>
          </div>
          <div class="right_img"><img src="./assets/trekker-tour.png"/></div>
        </div>
      </div>
      <div class="z-50 relative">
        <div class="grid mb-3">
          <div class="heading">
            <h2>Activities</h2>
          </div>
      </div> 
      <div class="guide slider grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
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
                <button mat-flat-button>K2</button>
                <button mat-flat-button>Nanga Parbat</button>
                <button mat-flat-button>Gasherbrum</button>
                <button mat-flat-button>Broad Peak</button>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>Book Now</a>
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
                <button mat-flat-button>K2</button>
                <button mat-flat-button>Nanga Parbat</button>
                <button mat-flat-button>Gasherbrum</button>
                <button mat-flat-button>Broad Peak</button>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>Book Now</a>
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
                <button mat-flat-button>K2</button>
                <button mat-flat-button>Nanga Parbat</button>
                <button mat-flat-button>Gasherbrum</button>
                <button mat-flat-button>Broad Peak</button>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>Book Now</a>
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
                <button mat-flat-button>K2</button>
                <button mat-flat-button>Nanga Parbat</button>
                <button mat-flat-button>Gasherbrum</button>
                <button mat-flat-button>Broad Peak</button>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>Book Now</a>
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
                <button mat-flat-button>K2</button>
                <button mat-flat-button>Nanga Parbat</button>
                <button mat-flat-button>Gasherbrum</button>
                <button mat-flat-button>Broad Peak</button>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>Book Now</a>
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
                <button mat-flat-button>K2</button>
                <button mat-flat-button>Nanga Parbat</button>
                <button mat-flat-button>Gasherbrum</button>
                <button mat-flat-button>Broad Peak</button>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>Book Now</a>
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
                <button mat-flat-button>K2</button>
                <button mat-flat-button>Nanga Parbat</button>
                <button mat-flat-button>Gasherbrum</button>
                <button mat-flat-button>Broad Peak</button>
              </div>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
            </div>
            <div class="adv_footer">
              <a>Book Now</a>
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
      <div class="z-50 relative">
        <div class="grid mb-3">
          <div class="heading">
            <h2>Guides Profile</h2>
          </div>
        </div> 
      <div class="guide slider grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
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
      <div class="story slider grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-5 mb-10">
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
  </div>
</div>
</div>
</div>

@include('footer')

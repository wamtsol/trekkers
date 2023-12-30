@include('header')
<div class="trip-container">
    <div class="trip_header w-full h-64  overflow-hidden" dir="rtl">
        <img class="trip_header h-full w-full object-cover" src="./assets/trip_banner.png"/>
        <div class="absolute transform -translate-y-1/2 top-56 w-full">
            <div class="m-auto container px-3">
                <div class="trip_des_inn bg-white z-50 lg:w-2/6 md:w-3/6 w-5/6 lg:my-16 md:my-16 lg:mx-0 md:mx-0 m-auto py-6 px-6 opacity-80 rounded-lg text-left">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div> 
            </div>
        </div> 
    </div>
    <div class="container mx-auto flex flex-wrap mb-6 px-3">
        <div class="w-full">
            <div class="col-span-1">
                <div class="luggage-box py-3">
                    <div class="luggage">
                        <div class="luggage_icon">
                            <img src="./assets/bag.svg"/>
                        </div>
                        <p>Excl. luggage</p>
                    </div>
                    <div class="luggage">
                        <div class="luggage_icon">
                            <img src="./assets/arowplan.svg"/>
                        </div>
                        <p>Always incl. transport</p>
                    </div>
                    <div class="luggage">
                        <div class="luggage_icon">
                            <img src="./assets/chat.svg"/>
                        </div>
                        <p>65% travel solo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto flex flex-wrap pb-6">
        <div class="w-full md:w-2/3 flex flex-col px-3">
            <div class="trip_details">
                <div class="heading_and_price">
                    <h2>Biafo Glacier Ice Climbing</h2>
                    <div class="price_details">
                        <p>From 1 706.50€</p>
                    </div>
                </div>
                <div class="trip_description">
                    <p>Rrow itself, let it be sorrow; let him love it; let him pursue it, ishing for its acquisitiendum. Because he will ab hold, uniess but through concer, and also of those who resist. Now a pure snore disturbeded sum dust. He ejjnoyes, in order that somewon, also with a severe one, unless of life. May a cusstums offficer somewon nothing of a poison-filled. Until, from a twho, twho chaffinch may also pursue it, not even a lump. But as twho, as a tank; a proverb, yeast; or else they tinscribe nor.</p> 
                    <p>Yet yet dewlap bed. Twho may be, let him love fellows of a polecat. Now amour, the, twhose being, drunk, yet twhitch and, an enclosed valley’s always a laugh. In acquisitiendum the Furies are Earth; in (he takes up) a lump Rrow itself, let it be sorrow; let him love it; let him pursue it, ishing for its acquisitiendum. Because he will ab hold, uniess but through concer, and also of those who resist. Now a pure snore disturbeded sum dust. </p>
                </div>
                <div class="trip_addition">
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        Transport 
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        Incl.flight 
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        18 - 26 Years  
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        Excl. luggage
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        10 days    
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        Hotel
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        15-28 people 
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        Normal Difficulty
                    </div>
                    <div class="trip_add_inn">
                        <div class="trip_add_icon"><img src="./assets/bag.svg"/></div>
                        9 Excursions 
                    </div>
                </div>
                <div class="trip_button_container">
                    <button class="text-white py-2 px-6 rounded-md">Book This Trip</button>
                    <button class="text-white py-2 px-6 rounded-md">Take An Option</button>
                    <button class="py-2 px-6 rounded-md">CareFree Booking</button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 flex flex-col px-3 ">
            <div class="trip_chart py-6 px-6">
              <canvas id="myChart"></canvas>
            </div>
            <div class="highlights_container">
                <h2>Highlights</h2>
                <div class="highlights_inner_container">
                    <ul >
                        <li>Climb the Diamond Hill</li>
                        <li>Hike at Cliffs of Moher</li>
                        <li>Sightseeing Ring of Kerry</li>
                        <li>Visit Cahir Castle</li>
                        <li>Atmospheric Dublin and Galway</li>
                        <li>Climb the Diamond Hill</li>
                        <li>Hike at Cliffs of Moher</li>
                        <li>Sightseeing Ring of Kerry</li>
                    </ul>
                    <a href="javascript:void(0);">View More</a>
                </div>
            </div>
        </div>
        <div class="w-full my-4 px-3">
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex w-full border-b tabs-header px-2">
                <li class="px-4 text-gray-800 font-semibold py-3 tabActive"><a id="default-tab" class="text-white" href="#first">Day-To-Day</a></li>
                <li class="px-4 text-gray-800 font-semibold py-3"><a class="text-white" href="#second">Included</a></li>
                <li class="px-4 text-gray-800 font-semibold py-3"><a class="text-white" href="#third">Important</a></li>
                <li class="px-4 text-gray-800 font-semibold py-3"><a class="text-white" href="#trek">Trek Menu</a></li>
                <li class="px-4 text-gray-800 font-semibold py-3"><a class="text-white" href="#exp">Experiences</a></li>
                <li class="px-4 text-gray-800 font-semibold py-3"><a class="text-white" href="#des">Destination</a></li>
                <li class="px-4 text-gray-800 font-semibold py-3"><a class="text-white" href="#faq">Faq</a></li>
            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents" class="bg-white">
                <div id="first" class="p-4">
                <div class="tabs_container">
                    <div class="DayToDay_table">
                        <h3>Itinerary</h3>
                        <p>Return flight Amsterdam - Dublin (or Zaventem - Dublin)</p>
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Activity</th>
                                    <th>Traffic</th>
                                    <th>Time</th>
                                    <th>Height</th>
                                    <th>Condition</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>skardu – askole</td>
                                    <td>Jeep</td>
                                    <td>5-6hour</td>
                                    <td>3050m</td>
                                    <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>askole – joule</td>
                                        <td>Trek</td>
                                        <td>6-6hour</td>
                                        <td>3218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>joula – paju</td>
                                        <td>Trek</td>
                                        <td>5-6hour</td>
                                        <td>3218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Rest in Paiju</td>
                                        <td>Trek</td>
                                        <td>2-6hour</td>
                                        <td>4218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>paju – khoburtse</td>
                                        <td>Trek</td>
                                        <td>5-6hour</td>
                                        <td>3218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>khoburtse-urdukas</td>
                                        <td>Trek</td>
                                        <td>3-6hour</td>
                                        <td>3218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>urdukas - goro2</td>
                                        <td>Trek</td>
                                        <td>3-6hour</td>
                                        <td>3218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>goro2 – Concordia</td>
                                        <td>Trek</td>
                                        <td>5-6hour</td
                                        ><td>3218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Concordia</td>
                                        <td>Trek</td>
                                        <td>2-6hour</td>
                                        <td>3218m</td>
                                        <td>Camp</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Paiju– Julla</td>
                                        <td>Trek</td>
                                        <td>5-6hour</td>
                                        <td>3218m</td>
                                        <td>Camp</td>
                                    </tr> 
                                </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <div id="second" class="hidden p-4">
                    <div class="DayToDay_table">
                        <div class="included_container">
                            <h3>Inclusive</h3>
                            <ul>
                                <li>Return flight Amsterdam - Dublin (or Zaventem - Dublin)</li>
                                <li>All transportation on site</li>
                                <li>Dutch-speaking Simi host + professional English-speaking driver/guide</li>
                                <li>Entrance fees to activities included in the program: Cahir Castle</li>
                                <li>Gegidste bustour Ring of Kerry & Slea head</li>
                                <li>Walking tours: Diamond hill, Cliffs of Moher, Dunmore Head and Valentia Island.</li>
                                <li>Sheepdog demonstration</li>
                                <li>Beer tasting with guided tour</li>
                                <li>Ferry to Aran Islands and across the river shannon</li>
                                <li>Accommodation in very neat hostels in prime locations: 2 nights in Dublin, Galway, Dingle and Tralee. 1 night in Lisdoonvarna</li>
                                <li>Contribution Guarantee Fund SGR. You can find the terms and conditions at  www.sgr.nl/warranty scheme . SGR will send these</li>
                                <li>terms and conditions on request</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="third" class="hidden p-4">
                    <div class="DayToDay_table">
                        <div class="included_container">
                            <h3>Inclusive</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <div id="trek" class="hidden p-4">
                    <div class="tabs_container">
                        <div class="DayToDay_table">
                            <h3>TREK MENU</h3>
                            <p>Below is the our reference menu we will provide with a combination four or five items one day</p>
                        </div>
                    </div>
                </div>
                <div id="exp" class="hidden p-4">
                    <div class="tabs_container">
                        <div class="experience_container">
                            <div class="flex">
                                <div class="w-2/6 mr-4">
                                    <div class="rating-overview">
                                        <h4>Rating Overview</h4>
                                        <div class="rating-overview-text">
                                            <h5>3.5 <span>/ 5</span></h5>
                                            <div class="total-rating-points">
                                                <a href="#" class="active_star"></a>
                                                <a href="#" class="active_star"></a>
                                                <a href="#" class="active_star"></a>
                                                <a href="#" class="active_star"></a>
                                                <a href="#"></a>
                                            </div>
                                            <span class="rating-total">21034, Rating</span>
                                        </div>
                                        <div class="rating-overview-list">
                                            <div class="rating-overview-list-box rating-80">
                                                <div class="rating-overview-list-box-points">
                                                    <b>5 <i class="fa-solid fa-star"></i></b>
                                                </div>
                                                <div class="rating-overview-list-box-bar"></div>
                                                <div class="rating-overview-list-box-total">
                                                    <span>12980</span>
                                                </div> 
                                            </div>
                                            <div class="rating-overview-list-box rating-70">
                                                <div class="rating-overview-list-box-points">
                                                    <b>4 <i class="fa-solid fa-star"></i></b>
                                                </div>
                                                <div class="rating-overview-list-box-bar"></div>
                                                <div class="rating-overview-list-box-total">
                                                    <span>9000</span>
                                                </div> 
                                            </div>
                                            <div class="rating-overview-list-box rating-30">
                                                <div class="rating-overview-list-box-points">
                                                    <b>3 <i class="fa-solid fa-star"></i></b>
                                                </div>
                                                <div class="rating-overview-list-box-bar"></div>
                                                <div class="rating-overview-list-box-total">
                                                    <span>1000</span>
                                                </div> 
                                            </div>
                                            <div class="rating-overview-list-box rating-20">
                                                <div class="rating-overview-list-box-points">
                                                    <b>2 <i class="fa-solid fa-star"></i></b>
                                                </div>
                                                <div class="rating-overview-list-box-bar"></div>
                                                <div class="rating-overview-list-box-total">
                                                    <span>900</span>
                                                </div> 
                                            </div>
                                            <div class="rating-overview-list-box rating-10">
                                                <div class="rating-overview-list-box-points">
                                                    <b>1 <i class="fa-solid fa-star"></i></b>
                                                </div>
                                                <div class="rating-overview-list-box-bar"></div>
                                                <div class="rating-overview-list-box-total">
                                                    <span>200</span>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-4/6">
                                    <div class="client-box mb-4">
                                        <div class="client-box-head">
                                            <div class="client-box-head-profle">
                                                <div class="client-box-head-img">
                                                    <img src="./assets/client-img.png" />
                                                </div>
                                                <div class="client-box-head-title">
                                                    <h4>anna diskens</h4>
                                                    <a href="#" class="email">anna diskens32@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="client-date">
                                                <span class="date"><img src="./assets/cat_vector.png"/> 02-07-2023</span>
                                            </div>
                                        </div>
                                        <div class="client-box-content">
                                            <p>For someone who had never done a group tour before, it worked out very well! If you love nature, good food and a bit of culture, Ireland is highly recommended!</p>
                                        </div>
                                        <div class="client-box-head-rating">
                                            <div class="client-box-head-rating-list">
                                                <span>3.0</span>
                                                <div class="total-rating-points">
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div class="client-box-head-like-dislike">
                                                <a href="#"><img src="./assets/like.svg"/> 10</a>
                                                <a href="#"><img src="./assets/unlike.svg"/> 0</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box mb-4">
                                        <div class="client-box-head">
                                            <div class="client-box-head-profle">
                                                <div class="client-box-head-img">
                                                    <img src="./assets/client-img.png" />
                                                </div>
                                                <div class="client-box-head-title">
                                                    <h4>anna diskens</h4>
                                                    <a href="#" class="email">anna diskens32@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="client-date">
                                                <span class="date"><img src="./assets/cat_vector.png"/> 02-07-2023</span>
                                            </div>
                                        </div>
                                        <div class="client-box-content">
                                            <p>For someone who had never done a group tour before, it worked out very well! If you love nature, good food and a bit of culture, Ireland is highly recommended!</p>
                                        </div>
                                        <div class="client-box-head-rating">
                                            <div class="client-box-head-rating-list">
                                                <span>3.0</span>
                                                <div class="total-rating-points">
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div class="client-box-head-like-dislike">
                                                <a href="#"><img src="./assets/like.svg"/> 10</a>
                                                <a href="#"><img src="./assets/unlike.svg"/> 0</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-box mb-4">
                                        <div class="client-box-head">
                                            <div class="client-box-head-profle">
                                                <div class="client-box-head-img">
                                                    <img src="./assets/client-img.png" />
                                                </div>
                                                <div class="client-box-head-title">
                                                    <h4>anna diskens</h4>
                                                    <a href="#" class="email">anna diskens32@gmail.com</a>
                                                    <span class="date"><i class="fa-solid fa-calendar"></i> 02-07-2023</span>
                                                </div>
                                            </div>
                                            <div class="client-date">
                                                <span class="date"><img src="./assets/cat_vector.png"/> 02-07-2023</span>
                                            </div>
                                        </div>
                                        <div class="client-box-content">
                                            <p>For someone who had never done a group tour before, it worked out very well! If you love nature, good food and a bit of culture, Ireland is highly recommended!</p>
                                        </div>
                                        <div class="client-box-head-rating">
                                            <div class="client-box-head-rating-list">
                                                <span>3.0</span>
                                                <div class="total-rating-points">
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#" class="active_star"></a>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <div class="client-box-head-like-dislike">
                                                <a href="#"><img src="./assets/like.svg"/> 10</a>
                                                <a href="#"><img src="./assets/unlike.svg"/> 0</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="des" class="hidden p-4">
                    <div class="tabs_container">
                        <div class="DayToDay_table">
                            <div class="included_container">
                                <img src="./assets/productslideritem.png"/>
                                <h3>Destination</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="faq" class="hidden p-4">
                    <div class="tabs_container">
                        <div class="DayToDay_table">
                            <div class="included_container">
                                <h3>Faq</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="md:container mx-auto px-3 z-50 relative">
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
@include('footer')
<div class="footer -z-10 relative">
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
<script>
    $(document).on('ready', function() {
    $(".regular").slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 3,
      prevArrow: '<button class="adv-slide-arrow prev-arrow"><img src="./assets/slider-icon-left.png"/></button>',
      nextArrow: '<button class="adv-slide-arrow next-arrow"><img src="./assets/slider-icon-right.png"/></button>',
      responsive: [
        {
            breakpoint: 991,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            
            }
        },
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            }
        }
      ]
    });
    $(".activities").slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 3,
      prevArrow: '<button class="adv-slide-arrow prev-arrow"><img src="./assets/slider-icon-left.png"/></button>',
      nextArrow: '<button class="adv-slide-arrow next-arrow"><img src="./assets/slider-icon-right.png"/></button>',
      responsive: [
        {
            breakpoint: 991,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            }
        }
      ]
    });
    $(".story").slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 3,
      prevArrow: '<button class="story-slide-arrow prev-arrow"><img src="./assets/slider-icon-left.png"/></button>',
      nextArrow: '<button class="story-slide-arrow next-arrow"><img src="./assets/slider-icon-right.png"/></button>',
      responsive: [
        {
            breakpoint: 991,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            }
        }
      ]
    });
    $(".guide").slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 3,
      prevArrow: '<button class="story-slide-arrow prev-arrow"><img src="./assets/slider-icon-left.png"/></button>',
      nextArrow: '<button class="story-slide-arrow next-arrow"><img src="./assets/slider-icon-right.png"/></button>',
      responsive: [
        {
            breakpoint: 991,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            }
        }
      ]
    });
    
    $(".lazy").slick({
      lazyLoad: 'ondemand', // ondemand progressive anticipated
      infinite: false,
      arrows: false,
      autoplay: true,
      fade:true,
      responsive: [
        {
            breakpoint: 991,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            }
        }
      ]
    });
  });
</script>

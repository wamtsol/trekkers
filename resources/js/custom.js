let tabsContainer = document.querySelector("#tabs");
let tabTogglers = tabsContainer.querySelectorAll("#tabs a");
console.log(tabTogglers);
tabTogglers.forEach(function(toggler) {
toggler.addEventListener("click", function(e) {
    e.preventDefault();
    let tabName = this.getAttribute("href");
    let tabContents = document.querySelector("#tab-contents");
    for (let i = 0; i < tabContents.children.length; i++) {
    tabTogglers[i].parentElement.classList.remove("tabActive");  tabContents.children[i].classList.remove("hidden");
    if ("#" + tabContents.children[i].id === tabName) {
        continue;
    }
    tabContents.children[i].classList.add("hidden");
    }
    e.target.parentElement.classList.add("tabActive");
});
});

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
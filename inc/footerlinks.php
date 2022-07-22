<!-- boostrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<!-- boostrap JS-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS-->
<!-- wow js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- wow js -->
<!-- slick slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- slick slider js -->
<!-- wow js -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>

<script src="js/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<!-- wow js -->
<script>
    new WOW().init();
</script>



<!-- Jquery JS -->
<script>
    
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    })

    $('document').ready(function() {
        $('.nav-icons .canvas-icon i').click(function() {
            $("#header .mobile-header").addClass('show');
        });

        $('#header .mobile-header .cancel').click(function() {
            $("#header .mobile-header").removeClass('show');
        });
    });
    $('.slider-fiqure').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.slider-fiqure1').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.whatsaycarousel').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    const CurrentLocation = window.location.href;
    const menuItem = document.querySelectorAll('.nav-web ul li a.menu');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === CurrentLocation) {
            menuItem[i].className = "active";
        }
    }

    // ranges start here
    // window.onload = function() {
    //     slideOne();
    //     slideTwo();
    // };

    // let sliderOne = document.getElementById("slider-1");
    // let sliderTwo = document.getElementById("slider-2");
    // let displayValOne = document.getElementById("range1");
    // let displayValTwo = document.getElementById("range2");
    // let minGap = 0;
    // let sliderTrack = document.querySelector(".slider-track");
    // let sliderMaxValue = document.getElementById("slider-1").max;

    // function slideOne() {
    //     if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
    //         sliderOne.value = parseInt(sliderTwo.value) - minGap;
    //     }
    //     displayValOne.textContent = sliderOne.value;
    //     fillColor();
    // }

    // function slideTwo() {
    //     if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
    //         sliderTwo.value = parseInt(sliderOne.value) + minGap;
    //     }
    //     displayValTwo.textContent = sliderTwo.value;
    //     fillColor();
    // }

    // function fillColor() {
    //     percent1 = (sliderOne.value / sliderMaxValue) * 100;
    //     percent2 = (sliderTwo.value / sliderMaxValue) * 100;
    //     sliderTrack.style.background = `linear-gradient(to right, #000 ${percent1}% , #ddc233 ${percent1}% , #ddc233 ${percent2}%, #000 ${percent2}%)`;
    // }
    // ranges start here
//     class PriceRange extends HTMLElement {
//   constructor() {
//     super();

//     console.log('Price Range: Constructor', this);
//   }

//   connectedCallback() {
//     // Elements
//     this.elements = {
//       container: this.querySelector('div'),
//       track: this.querySelector('div > div'),
//       from: this.querySelector('input:first-of-type'),
//       to: this.querySelector('input:last-of-type'),
//       output: this.querySelector('output')
//     }

//     // Event listeners
//     this.elements.from.addEventListener('input', this.handleInput.bind(this));
//     this.elements.to.addEventListener('input', this.handleInput.bind(this));

//     // Properties
//     this.currency = (this.hasAttribute('currency') &&
//                      this.getAttribute('currency') !== undefined &&
//                      this.getAttribute('currency') !== '') ? this.getAttribute('currency') : '£';
          
//     // Update the DOM
//     this.updateDom();

//     console.log('Price Range: Connected', this);
//   }

//   disconnectedCallback() {
//     delete this.elements;
//     delete this.currency;

//     console.log('Price Range: Disconnected', this);
//   }
  
//   get from() {
//     return parseInt(this.elements.from.value);
//   }
//   get to() {
//     return parseInt(this.elements.to.value);
//   }
  
//   handleInput(event) {
//     if (parseInt(this.elements.to.value) - parseInt(this.elements.from.value) <= 1) {
//       if (event.target === this.elements.from) {
//         this.elements.from.value = (parseInt(this.elements.to.value) - 1);
//       } else if (event.target === this.elements.to) {
//         this.elements.to.value = (parseInt(this.elements.from.value) + 1);
//       }
//     }

//     // Update the DOM
//     this.updateDom();
    
//     console.log('Price Range: Updated!!', {
//       from: parseInt(this.elements.from.value),
//       to: parseInt(this.elements.to.value)
//     });
//   }

//   updateDom() {
//     this.drawFill();
//     this.drawOutput();
//   }

//   drawFill() {
//     const percent1 = (this.elements.from.value / this.elements.from.max) * 100,
//           percent2 = (this.elements.to.value / this.elements.to.max) * 100;

//     this.elements.track.style.background = `linear-gradient(to right, var(--track-color) ${percent1}%, var(--track-highlight-color) ${percent1}%, var(--track-highlight-color) ${percent2}%, var(--track-color) ${percent2}%)`;
//   }

//   drawOutput() {
//     this.elements.output.textContent = `${this.currency}${this.elements.from.value} - ${this.currency}${this.elements.to.value}`;
//   }
// }

// customElements.define('price-range', PriceRange);

$(document).ready(function() {
        // $('.for-the-img-slider').slick();
        $('.for-the-img-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true
        });


        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    })

    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    })
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });

</script>
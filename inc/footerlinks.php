<!-- boostrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<!-- boostrap JS-->
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
</script>
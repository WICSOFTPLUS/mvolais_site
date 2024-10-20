import './bootstrap';


// document.querySelectorAll('.navLInk').forEach(element => {

//     console.log(element.getAttribute('href'));
//     console.log(window.location.pathname);
//     if (element.getAttribute('href') == window.location.pathname) {
//         alert('heuu')
//         element.classList.add('active');
//     }


// });

// $('.navLInk').each(function(){
//     let active = window.location.pathname.toLowerCase()

//     if (active === $(this).attr('href').toLowerCase()) {
//         $(this).addClass('active')
//     }

// })

// $('.hero-slider').owlCarousel({
//     loop: true,
//     margin: 0,
//     items: 1,
//     dots: true,
//     navText: ['<i class="uil uil-angle-left"></i>', '<i class="uil uil-angle-right-b"></i>'],
//     smartSpeed: 1000,
//     autoplay: true,
//     autoplayTimeout: 7000,
//     responsive: {
//         0: {
//             nav: false,
//         },
//         768: {
//             nav: true,
//         }
//     }
// })

// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive: {
//         0: {
//             items: 1
//         },
//         768: {
//             items: 3,
//             margin: 8,
//         }
//     }
// })

window.addEventListener('load', () => {
    AOS.init({
      duration: 300,
      easing: 'ease-in-out',
      once: false,
      mirror: true
    })

    function loader() {
    document.querySelector("#load").style.display = "none"
    document.querySelector("#load").remove()
    }
   loader()
    function toggelMenu() {
        document.querySelector("#toggle").addEventListener("click", function () {
            document.querySelector("#menu").classList.toggle("active")
        })
    }
    toggelMenu()
  });


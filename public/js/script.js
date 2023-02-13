/***** To Top Button *************************/
const toTopBtn = document.querySelector('#toTop');
toTopBtn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0, 0);
});
if(window.scrollY > 800) {
    toTopBtn.classList.add('show');
}
window.addEventListener('scroll', (e) => {
    let fromTop = window.scrollY + 400; // +400 so it is more user friendly
    if(fromTop > 800) toTopBtn.classList.add('show');
    else toTopBtn.classList.remove('show');
});
/*********************************************/
/***** Hero slideshow ************************/
const heroSlideshowImages = document.querySelectorAll('.heroImages img');
let curIndex = 0;
let imgDuration = 4000;

function slideShow() {
    curIndex++;
    if (curIndex == heroSlideshowImages.length) {
        curIndex = 0;
        heroSlideshowImages.forEach((element,i) => {
            if(i != 0) element.style.opacity = 0;
        });
    }
    heroSlideshowImages[curIndex].style.opacity = 1;
    setTimeout("slideShow()", imgDuration);
}
if(heroSlideshowImages && heroSlideshowImages.length > 1) setTimeout("slideShow()", imgDuration);
/*********************************************/

// window.addEventListener('load', function(){
//     let partners = document.querySelector('.partnerGlider');
//     if(partners) {
//         new Glider(partners, {
//             slidesToShow: 2,
//             slidesToScroll: 1,
//             draggable: true,
//             scrollLock: true,
//             // dots: '.testimonialDots',
//             responsive: [
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 5,
//                         slidesToScroll: 1,
//                     }
//                 }
//             ]
//         });
//     }
// });
var swiperPartner = new Swiper(".partnerSwiper", {
    slidesPerView: 2,
    spaceBetween: 0,
    speed: 1000,
    // loop: true, // not compatible with slidesPerView
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 5,
        },
    }
});

var swiperStats = new Swiper(".statsSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 1000,
    // loop: true, // not compatible with slidesPerView
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next-stats",
        prevEl: ".swiper-button-prev-stats",
    },
    breakpoints: {
        // 480: {
        //     slidesPerView: 2,
        //   },
        768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
          }
});

var swiperProfessionals = new Swiper(".professionalsSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 1000,
    // loop: true, // not compatible with slidesPerView
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next-prof",
        prevEl: ".swiper-button-prev-prof",
    },
    breakpoints: {
        480: {
            slidesPerView: 2,
          },
        768: {
          slidesPerView: 3,
        },
      }
});

var swiperOurVessels = new Swiper(".ourVesselsSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 1000,
    // loop: true, // not compatible with slidesPerView
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    navigation: {
        nextEl: ".swiper-button-next-vessels",
        prevEl: ".swiper-button-prev-vessels",
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'bullets',
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
          }
});

const statNumbers = document.querySelectorAll('.statNumber');
function upCountNumbers() {
    if(statNumbers && statNumbers.length) {
        statNumbers.forEach(element => {
            let number = parseInt(element.innerHTML.replace('.', ''));
            // console.log(number);
            // for(let x = 0; x <= number; x++) {
                // console.log(x);
                // setTimeout(() => {
                    // console.log(x);
                    // element.innerHTML = x;
                // }, 1000);
            // }
            // startUpCount()

            for (let i = 0; i <= number; i+=1) {
                setTimeout(() => {
                    // console.log("hello world");
                    element.innerHTML = i;
                }, i * 1);
            }


        });
    }
}

upCountNumbers();
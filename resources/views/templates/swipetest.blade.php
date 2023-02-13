<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swiper</title>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <style>
        /* .swiper {
          width: 100%;
          height: 100%;
        } */
      </style>
</head>
<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="statIcon">[icon]</div>
            <div class="statNumber">5.846</div>
            <div class="statHeadline">COMPLETED <strong>OFFSHORE TRANSFERS</strong></div>
            <div class="statSubline">And still counting!</div>
        </div>
        <div class="swiper-slide">
            <div class="statIcon">[icon]</div>
            <div class="statNumber">5.846</div>
            <div class="statHeadline">COMPLETED <strong>OFFSHORE TRANSFERS</strong></div>
            <div class="statSubline">And still counting!</div>
        </div>
        <div class="swiper-slide">
            <div class="statIcon">[icon]</div>
            <div class="statNumber">5.846</div>
            <div class="statHeadline">COMPLETED <strong>OFFSHORE TRANSFERS</strong></div>
            <div class="statSubline">And still counting!</div>
        </div>
    </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  
    <!-- Swiper JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> --}}
  
    <!-- Initialize Swiper -->
    <script>

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 1000,
    // loop: true, // not compatible with slidesPerView
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});
    </script>
  </body>
</html>

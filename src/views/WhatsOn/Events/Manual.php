<?php
require_once 'src/views/Shared/Header.php';
?>

<div class="justify-center mx-6 my-6 rounded-xl sm:py-16">
  
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-indigo-300">St Mary's Wollaton Park:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Events</p>
  </div>

<!-- carousel -->
<div class="relative w-full max-w-6xl mx-auto">
  <div class="overflow-hidden">
    <div id="carousel" class="flex transition-transform duration-500">
      
      <!-- Slide 1 -->
      <div class="flex-none w-[85%] grid grid-cols-1 md:grid-cols-3 gap-4 p-4 rounded-2xl">
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Christmas Concert</p>
          <p><i>5th December 2025 5:30pm-7:30pm</i></p>
          <p><i>Main Church</i></p>
          <p>Modern christmas concert performed with church band and the Jesuit dancers. Refreshments of mince pies and non-alcholic mulled wine.</p>
        </div>
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Sunday Service</p>
          <p><i>6th December 2025 5:30pm-7:30pm</i></p>
          <p><i>Main Church</i></p>
          <p>2nd Week of advent before Christmas, where we find joy.</p>
        </div>
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Kids Christmas Party</p>
          <p><i>10th December 2025 5:30pm-7:30pm</i></p>
          <p><i>Main Church</i></p>
          <p>Suitable for ages 14-18. It will have a christmas quiz and disco.</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="flex-none w-[85%] grid grid-cols-1 md:grid-cols-3 gap-4 p-4 rounded-2xl">
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Sunday Service</p>
          <p><i>12th December 2025 5:30pm-7:30pm</i></p>
          <p><i>Main Church</i></p>
          <p>3rd week of advent, we look at peace and resolution in times of crisis.</p>
        </div>
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Christmas Carols</p>
          <p><i>13th December 2025 5:30pm-7:30pm</i></p>
          <p><i>Main Church</i></p>
          <p>Traditional sung carol service with choir and brass band. Refreshments of mince pies and non-alcholic mulled wine.</p>
        </div>
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Christingle and nativity</p>
          <p><i>15th Dec 2025 5:30pm-7:30pm</i></p>
          <p><i>Main Church</i></p>
          <p>Kids christingle and sunday school nativity. Photographs must not be taken during the service.</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="flex-none w-[85%] grid grid-cols-1 md:grid-cols-3 gap-4 p-4 rounded-2xl">
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Sunday Service</p>
          <p><i>18th December 2025 5:30pm-7:30pm</i></p>
          <p><i>Main Church</i></p>
          <p>4th week of advent, we look at christ</p>
        </div>
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">St Albuns Homes carols</p>
          <p><i>19th Dec 2025 12:30pm-2:30pm</i></p>
          <p><i>Camberwick St Albuns Homes</i></p>
          <p>Singing traditional carols in the local old peoples homes. Participants to wear christmas jumpers.</p>
        </div>
        <div class="bg-indigo-900 p-4 rounded-xl">
          <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Village carols</p>
          <p><i>20th Dec 2025 12:30pm-2:30pm</i></p>
          <p><i>Camberwick Green Precinct</i></p>
          <p>Singing traditional carols in the precinct. Participants to wear christmas jumpers.</p>
        </div>
      </div>
    </div>
  </div>

  <button onclick="prevSlide()" 
    class="absolute top-1/2 -left-6 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow z-10">
    ‹
  </button>
  <button onclick="nextSlide()" 
    class="absolute top-1/2 -right-6 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full shadow z-10">
    ›
  </button>
</div>

<script>
  let currentIndex = 0;
  const carousel = document.getElementById("carousel");
  const slides = carousel.children;
  const totalSlides = slides.length;

  function updateCarousel() {
    const slideWidth = slides[0].offsetWidth
    carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
  }

  window.addEventListener("load", updateCarousel);
  window.addEventListener("resize", updateCarousel);

</script>



  <div class="mx-auto max-w-4xl px-2 py-12 text-center">
    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Read more</p>
  </div>

  <div class="mt-6 grid md:grid-cols-2 gap-4">
    <a href="/st-marys/sundays">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Sundays</h3>
      </div>
    </a>
    <a href="/st-marys/children">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Children</h3>
      </div>
    </a>
  </div>
</div>

<?php
require_once 'src/views/Shared/Footer.php';
?>

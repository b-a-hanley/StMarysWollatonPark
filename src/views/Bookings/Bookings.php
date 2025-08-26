<?php
require_once 'src/views/Shared/Header.php';
?>

<div class="bg-indigo-900 justify-center mx-6 my-6 rounded-xl sm:py-16">
  
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-indigo-300">St Mary's Wollaton Park:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Bookings</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
        alt="St Mary's Wollaton Park">
    </div>

    <div class="mx-auto max-w-2xl text-center md:text-left md:order-1">
      <div class="py-6">
        <p class="mt-2 text-xl font-bold tracking-tight text-gray-100 sm:text-3xl">Church Hall Hire</p>
        <p class="mt-6 py-2 text-lg leading-8 text-gray-100">
          Our large church hall is available for hire Monday – Saturday for children’s parties, meetings, dances, exercise classes and the like. The approximate dimensions of the hall are 14m long x 8m wide. It its highest point the ceiling is 5m above the floor, coming down to 2.5m at the sides.  Whether you are looking for a one-off event or are interested in a regular booking please contact us to arrange a viewing and to discuss your needs.
        </p>
      </div>
      <div class="py-6">
        <p class="mt-2 text-xl font-bold tracking-tight text-gray-100 sm:text-3xl">Car Parking</p>
        <p class="mt-6 py-2 text-lg leading-8 text-gray-100">
          Located on the edge of Queen's Medical center, NHS staff can access cheaper parking.
        </p>
      </div>
    </div>
  </div>

  <div class="mx-auto max-w-4xl px-2 py-12 text-center">
    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Read more</p>
  </div>

  <div class="mt-6 grid md:grid-cols-2 gap-4">
    <a href="/st-marys/our-story">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Our Story</h3>
      </div>
    </a>
    <a href="/st-marys/contact-us">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Contact us</h3>
      </div>
    </a>
  </div>
</div>

<?php
require_once 'src/views/Shared/Footer.php';
?>

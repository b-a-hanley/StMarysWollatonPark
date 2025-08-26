<?php
require_once 'src/views/Shared/Header.php';
?>

<div class="bg-indigo-900 justify-center mx-6 my-6 rounded-xl sm:py-16">
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-indigo-300">St Mary's Wollaton Park:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Students</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
        alt="St Mary's Wollaton Park">
    </div>

    <div class="mx-auto max-w-2xl text-center md:text-left md:order-1">
      <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-3xl">18-30s Bible Study</p>
      <p class="mt-6 text-lg leading-8 text-gray-100">
        Right on the edge of Jubilee Campus with both University of Nottingham and Nottingham trent near by, our student group is a welcoming, supportive community where university students can explore the Bible in depth. Expect lively discussion, thoughtful challenges, snacks, and friendships that help you grow in faith.
      </p>
    </div>
  </div>

  <div class="mx-auto max-w-4xl px-2 py-12 text-center">
    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Read more</p>
  </div>

  <div class="mt-6 grid md:grid-cols-2 gap-4">
    <a href="/st-marys/our-beliefs">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Our Beliefs</h3>
      </div>
    </a>
    <a href="/st-marys/our-team">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Our Team</h3>
      </div>
    </a>
  </div>
</div>

<?php
require_once 'src/views/Shared/Footer.php';
?>

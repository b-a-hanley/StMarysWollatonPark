<?php
require_once 'src/views/Shared/Header.php';
?>

<div class="bg-indigo-900 justify-center mx-6 my-6 rounded-xl sm:py-16">
  <!-- Title block -->
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-indigo-300">St Mary's Wollaton Park:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Our Story</p>
  </div>

  <!-- Section 1: Image left, Text right -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <!-- Image -->
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
        alt="St Mary's Wollaton Park">
    </div>

    <!-- Text -->
    <div class="mx-auto max-w-2xl text-center md:text-left">
      <p class="mt-6 text-lg leading-8 text-gray-100">
        When Wollaton Park was sold by the Middletons to Nottingham Corporation, a garden suburb was developed in this area.
      </p>
      <p class="mt-6 text-lg leading-8 text-gray-100">
        The corporation also acquired land that is now the Lenton Abbey estate, centered around a large house still known as Lenton Abbey, which is currently owned by the University of Nottingham. This acquisition extended the corporation's land holdings from the Drill Hall at the top of Derby Road, westward towards what became Woodside Road, and as far as Trent Side in North Wilford. The residential development in this area created a demand for new churches. As a result, two churches were built: St Barnabas, serving the new Lenton Abbey estate, and St Mary's in Wollaton Park.
      </p>
    </div>
  </div>

  <!-- Section 2: Text left, Image right -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <!-- Text -->
    <div class="mx-auto max-w-2xl text-center md:text-left md:order-1">
      <p class="mt-6 text-lg leading-8 text-gray-100">
        St Mary's was designed by the Nottingham architect T.C. Howitt between 1937 and 1939, who was also a worshipper at the new church. The design included a church hall and vicarage.
      </p>
      <p class="mt-6 text-lg leading-8 text-gray-100">
        The church was dedicated to St Mary in honour of the lost village of Sutton Passeys which would have been located somewhere in Wollaton Park. Sutton Passey's church, St Mary the Virgin, dated back to 1340 but now is lost with the rest of the village.
      </p>
    </div>

    <!-- Image -->
    <div class="flex justify-center md:justify-end md:order-2">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
        alt="St Mary's Wollaton Park">
    </div>
  </div>

  <!-- Section 1: Image left, Text right -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <!-- Image -->
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
        alt="St Mary's Wollaton Park">
    </div>

    <!-- Text -->
    <div class="mx-auto max-w-2xl text-center md:text-left">
      <p class="mt-6 text-lg leading-8 text-gray-100">
        When Wollaton Park was sold by the Middletons to Nottingham Corporation, a garden suburb was developed in this area.
      </p>
      <p class="mt-6 text-lg leading-8 text-gray-100">
        The corporation also acquired land that is now the Lenton Abbey estate, centered around a large house still known as Lenton Abbey, which is currently owned by the University of Nottingham. This acquisition extended the corporation's land holdings from the Drill Hall at the top of Derby Road, westward towards what became Woodside Road, and as far as Trent Side in North Wilford. The residential development in this area created a demand for new churches. As a result, two churches were built: St Barnabas, serving the new Lenton Abbey estate, and St Mary's in Wollaton Park.
      </p>
    </div>
  </div>
  
  <!-- Read more block -->
  <div class="mx-auto max-w-4xl px-2 py-12 text-center">
    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Read more</p>
  </div>

  <!-- Links -->
  <div class="mt-6 grid md:grid-cols-2 gap-4">
    <a href="/st-marys/about-us">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">St Mary's page of the Church History Project</h3>
      </div>
    </a>
    <a href="/st-marys/media">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Les Berry’s “St. Mary’s Church Wollaton Park"</h3>
      </div>
    </a>
  </div>
</div>

<?php
require_once 'src/views/Shared/Footer.php';
?>

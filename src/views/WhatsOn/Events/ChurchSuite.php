<?php
require_once 'src/views/Shared/Header.php';
require_once 'api.php';
?>

<div class="bg-indigo-900 justify-center mx-6 my-6 rounded-xl sm:py-16">
  
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-indigo-300">St Mary's Wollaton Park:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Events</p>
  </div>

  <iframe class="px-6 py-6" frameborder="0" height="800" allowtransparent="yes" scrolling="yes" src="https://demo.churchsuite.com/-/calendar/62436903-841e-4239-bc95-e6952e17430e" style="border-width:0" width="100%"></iframe>

  <div class="mx-auto max-w-4xl px-2 py-12 text-center">
    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Read more</p>
  </div>

  <div class="mt-6 grid md:grid-cols-2 gap-4">
    <a href="/st-marys/our-beliefs">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Our Beliefs</h3>
      </div>
    </a>
    <a href="/st-marys/baptisms">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Baptisms</h3>
      </div>
    </a>
  </div>
</div>

<?php
require_once 'src/views/Shared/Footer.php';
?>

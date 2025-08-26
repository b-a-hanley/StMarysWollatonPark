<?php
require_once 'src/views/Shared/Header.php';
?>

<div class="bg-indigo-900 justify-center mx-6 my-6 rounded-xl sm:py-16">
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-indigo-300">St Mary's Wollaton Park:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Contact us</p>
  </div> 

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <div class="flex justify-center md:justify-start">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
        alt="St Mary's Wollaton Park">
    </div>

    <div class="text-center md:text-left md:order-1">
  <p class="mt-2 py-6 text-2xl font-bold tracking-tight text-gray-100 sm:text-3xl">Email</p>
  <div class="flex w-full rounded-md shadow-xs" role="group">
      <a href="mailto:enquiries@stmaryswollatonpark.co.uk" 
        class="flex-1 text-center px-6 py-2 text-sm font-medium text-lg text-gray-900 bg-blue-600 border border-transparent rounded-l-lg hover:bg-indigo-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-indigo-500 focus:text-white dark:border-indigo-800 dark:text-white">
        Enquiries
      </a>
      <a href="mailto:enquiries@stmaryswollatonpark.co.uk" 
        class="flex-1 text-center px-6 py-2 text-sm font-medium text-lg text-gray-900 bg-blue-600 border border-transparent hover:bg-indigo-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-indigo-500 focus:text-white dark:border-indigo-800 dark:text-white">
        Vicar
      </a>
      <a href="mailto:enquiries@stmaryswollatonpark.co.uk" 
        class="flex-1 text-center px-6 py-2 text-sm font-medium text-lg text-gray-900 bg-blue-600 border border-transparent hover:bg-indigo-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-indigo-500 focus:text-white dark:border-indigo-800 dark:text-white">
        Safeguarding
      </a>
      <a href="mailto:enquiries@stmaryswollatonpark.co.uk" 
        class="flex-1 text-center px-6 py-2 text-sm font-medium text-lg text-gray-900 bg-blue-600 border border-transparent rounded-r-lg hover:bg-indigo-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-indigo-500 focus:text-white dark:border-indigo-800 dark:text-white">
        PCC Chair
      </a>
    </div>


      <div class="py-6">
        <p class="mt-2 py-6 text-2xl font-bold tracking-tight text-gray-100 sm:text-3xl">Address</p>
        <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-xl">St Mary’s Wollaton Park</p>
        <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-xl">Wollaton Hall Drive</p>
        <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-xl">Nottingham</p>
        <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-xl">NG8 1AF</p>    
      </div>
    </div>
  </div>

  <div class="mx-auto max-w-4xl px-2 py-12 text-center">
    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-100 sm:text-2xl">Read more</p>
  </div>

  <div class="mt-6 grid md:grid-cols-2 gap-4">
    <a href="/st-marys/our-team">
      <div class="rounded-3xl mx-6 p-8 ring-1 ring-gray-200 hover:ring-indigo-400 transition">
        <h3 class="text-lg font-semibold leading-8 text-gray-100">Our Team</h3>
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

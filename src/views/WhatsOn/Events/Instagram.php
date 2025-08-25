<?php
require_once 'src/views/Shared/Header.php';
require_once 'api.php';

$url = "https://graph.instagram.com/{$userId}/media?fields=id,media_type,media_url,permalink,caption,timestamp,thumbnail_url&access_token={$accessToken}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);
$posts = $data['data'] ?? [];
?>

<div class="justify-center mx-6 my-6 rounded-xl sm:py-16">
  
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-indigo-300">St Mary's Wollaton Park:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Events</p>
  </div>


<?php if (!empty($posts)): ?>
<!-- carousel -->
<div class="relative w-full max-w-6xl mx-auto">
  <div class="overflow-hidden">
    <div id="carousel" class="flex transition-transform duration-500">

      <?php 
      // Break posts into chunks of 3
      $chunks = array_chunk($posts, 3);
      foreach ($chunks as $chunk): ?>
        <div class="flex-none w-[85%] grid grid-cols-1 md:grid-cols-3 gap-4 p-4 rounded-2xl">
          <?php foreach ($chunk as $post): ?>
            <div class="bg-indigo-900 p-4 rounded-xl">
              <?php if ($post['media_type'] === 'IMAGE' || $post['media_type'] === 'CAROUSEL_ALBUM'): ?>
                <img src="<?= htmlspecialchars($post['media_url']) ?>" alt="" class="rounded-lg mb-2 max-h-60 w-full object-cover">
              <?php elseif ($post['media_type'] === 'VIDEO'): ?>
                <video controls class="rounded-lg mb-2 max-h-60 w-full object-cover">
                  <source src="<?= htmlspecialchars($post['media_url']) ?>" type="video/mp4">
                </video>
              <?php endif; ?>
              <p class="mt-2 text-xl font-bold tracking-tight text-gray-100">
                <?= !empty($post['caption']) ? htmlspecialchars(mb_strimwidth($post['caption'], 0, 80, "...")) : "Untitled" ?>
              </p>
              <p class="text-sm text-gray-300">
                <?= date("jS M Y", strtotime($post['timestamp'])) ?>
              </p>
              <a href="<?= htmlspecialchars($post['permalink']) ?>" target="_blank" class="text-indigo-400 underline">View on Instagram</a>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <!-- Navigation -->
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
    if (totalSlides === 0) return;
    const slideWidth = slides[0].offsetWidth;
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

<?php else: ?>
  <div class="mx-auto max-w-4xl px-6 py-12 text-center">
    <p class="text-xl text-gray-300">No events are currently available. Please check back later.</p>
  </div>
<?php endif; ?>

<?php
require_once 'src/views/Shared/Footer.php';
?>

basic page design to live

 <!-- Testing area -->

<!-- Gallery Section -->
<div class="flex items-center justify-center py-10 md:py-24 px-6 md:px-24">
    <div class="flex flex-col md:flex-row w-full h-full">

        <!-- First Image Column (Image 1) -->
        <div class="flex items-stretch w-full md:w-1/2 h-[300px] md:h-full">
            <img src="images/img1.jpg" class="w-full h-full object-cover space-y-4">
        </div>

        <!-- Second Column with Nested Images (Image 2, Image 3, Image 4) -->
        <div class="flex flex-col w-full md:w-1/2 h-auto md:h-full space-y-4 md:space-y-0">

            <!-- Image 2 (top-right for medium screens) -->
            <div class="w-full h-[300px] md:h-1/2">
                <img src="images/img2.jpg" class="w-full h-full object-cover space-y-4">
            </div>

            <!-- Image 3 and Image 4 (bottom-right for medium screens) -->
            <div class="flex flex-row w-full h-[300px] md:h-1/2 space-x-4">
                <div class="w-1/2 h-full">
                    <img src="images/img3.jpg" class="w-full h-full object-cover">
                </div>
                <div class="w-1/2 h-full">
                    <img src="images/img3.jpg" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

</div>

our section

<!-- Our Story Section -->
<div class="relative md:h-screen h-auto bg-slate-100 flex flex-col justify-center items-center md:mt-0 md:mb-0 md:p-2">
    <!-- Background Image with Overlay -->
    <div class="w-full h-full relative">
        <img src="images/Ceramic2.jpg" alt="hero image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-70"></div>
    </div>

    <!-- Centered Text Content -->
    <div class="absolute flex flex-col items-center justify-center text-center space-y-6 px-6">
        <h1 class="text-4xl font-bold text-white">Our Story</h1>
        <p class="text-sm md:text-xl text-slate-200">
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen book.
        </p>
    </div>

</div>

<!--
 <script>
      // JavaScript to toggle the mobile menu
      document
        .getElementById("menu-toggle")
        .addEventListener("click", function () {
          const menu = document.getElementById("mobile-menu");
          menu.classList.toggle("hidden");
        });

      const carouselInner = document.getElementById("carousel-inner");
      const prevBtn = document.getElementById("prev-btn");
      const nextBtn = document.getElementById("next-btn");

      let currentIndex = 0;

      const updateCarousel = () => {
        carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
      };

      prevBtn.addEventListener("click", () => {
        currentIndex = currentIndex === 0 ? 2 : currentIndex - 1;
        updateCarousel();
      });

      nextBtn.addEventListener("click", () => {
        currentIndex = currentIndex === 2 ? 0 : currentIndex + 1;
        updateCarousel();
      });
    </script> -->

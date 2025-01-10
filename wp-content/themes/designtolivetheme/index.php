<?php
get_header();
?>

<!-- Ceramic  section -->
<div
    class="relative md:h-screen h-[500px] bg-slate-100 flex justify-center items-center md:mt-0 md:mb-0 md:p-2">
    <img
        src="<?php echo get_theme_mod('custom_banner_image_control_setting') ?>"
        alt="ceramic image"
        class="absolute inset-0 w-full h-full object-cover z-0" />
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div
        class="relative z-10 flex flex-col items-center justify-center space-y-6 md:w-2/6 w-full p-6">
        <h1 class="md:text-4xl text-3xl md:font-bold font-medium text-white">
            <?php echo get_theme_mod('custom_banner_title_settings'); ?>
        </h1>
        <p class="md:text-xl text-sm text-center text-slate-200">
            <?php echo get_theme_mod('custom_banner_content_settings'); ?>
        </p>
        <button
            class="px-7 py-3 bg-amber-800 md:text-xl text-sm text-white hover:bg-red-800">
            Show More
        </button>
    </div>
</div>

<!--Best Sellers Section-->

<div
    class="flex flex-col items-center justify-center md:px-24 md:py-24 py-10 space-y-6 md:h-screen md:mt-0 md:mb-0 md:p-2">
    <h2 class="md:text-4xl text-3xl font-medium md:font-bold text-gray-700">
        <?php echo get_theme_mod('custom_sellery_title_settings'); ?>
    </h2>

    <div
        class="flex md:flex-row flex-col items-stretch w-full h-full md:space-x-6 justify-center md:space-y-0 space-y-4 md:px-0 px-4">
        <div
            class="flex flex-col items-stretch md:w-1/4 h-full border-b hover:shadow-md">
            <div class="flex w-full h-full">
                <img
                    src="<?php echo get_theme_mod('custom_sellery_image1_control_setting') ?>"
                    alt="card image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col justify-start w-full text-xl p-2">
                <p class="md:text-xl font-medium text-sm"><?php echo get_theme_mod('custom_sellery_content1_settings') ?></p>
                <p class="md:text-xl text-sm"><?php echo get_theme_mod('custom_sellery_content1_settings') ?>$</p>
            </div>
        </div>

        <div
            class="flex flex-col items-stretch md:w-1/4 h-full border-b hover:shadow-md">
            <div class="flex w-full h-full">
                <img
                    src="<?php get_theme_mod('custom_sellery_image2_control_setting') ?>"
                    alt="card image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col justify-start w-full text-xl p-2">
                <p class="md:text-xl font-medium text-sm"><?php echo get_theme_mod('custom_sellery_content2_settings') ?></p>
                <p class="md:text-xl text-sm"><?php echo get_theme_mod('custom_sellery_content2_settings') ?>$</p>
            </div>
        </div>

        <div
            class="flex flex-col items-stretch md:w-1/4 h-full border-b hover:shadow-md">
            <div class="flex w-full h-full">
                <img
                    src="<?php get_theme_mod('custom_sellery_image3_control_setting') ?>"
                    alt="card image"
                    class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col justify-start w-full text-xl p-2">
                <p class="md:text-xl font-medium text-sm"><?php echo get_theme_mod('custom_sellery_content3_settings') ?></p>
                <p class="md:text-xl text-sm"><?php echo get_theme_mod('custom_sellery_content3_settings') ?>$</p>
            </div>
        </div>
    </div>
</div>

<!--New Collection Section-->

<div
    class="flex items-center bg-slate-200 md:py-24 py-10 justify-center md:h-screen md:px-24 md:mt-0 md:mb-0 md:p-2">
    <div
        class="flex md:flex-row flex-col md:space-x-10 space-y-6 items-center justify-center w-full h-full">
        <div
            class="flex flex-col space-y-6 items-start md:w-1/2 w-full md:px-0 px-8">
            <h1
                class="flex md:text-4xl text-3xl text-gry-700 md:font-bold font-medium">
                New collection
            </h1>
            <p class="md:text-xl text-sm text-gray-700 flex flex-wrap">
                Lorem Ipsum has been the industry's standard dummy text ever since
                the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book
            </p>
            <button
                class="flex px-4 py-3 bg-red-700 hover:bg-red-800 text-white w-28 justify-center md:text-xl text-sm items-center">
                More
            </button>
        </div>
        <div
            class="flex flex-row items-stretch md:space-x-4 md:w-1/2 w-full h-auto">
            <!-- Left Column: Two Stacked/images -->
            <div
                class="flex flex-col items-center justify-between md:space-y-4 space-y-2 h-auto md:px-0 px-0">
                <div class="w-38 h-1/2">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/newcollection1.png"
                        class="w-full h-auto object-cover" />
                </div>
                <div class="w-38 h-1/2">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/newcollection1.png"
                        class="w-full h-auto object-contain" />
                </div>
            </div>
            <!-- Right Column: Single Image -->
            <div class="flex items-stretch ml-2 h-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/images/newcollection1.png" class="w-full object-cover" />
            </div>
        </div>
    </div>
</div>

<!-- Workshop section -->
<div class="flex items-center justify-center md:h-screen md:mt-0 md:mb-0">
    <div
        class="flex md:flex-row flex-col items-stretch justify-center w-full h-full">
        <div class="md:w-1/2 w-full h-full">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/workshops.png"
                alt="image"
                class="w-full h-full object-cover" />
        </div>
        <div
            class="flex flex-col items-start justify-center md:ml-20 space-y-6 md:w-1/2 w-full h-full p-8">
            <h1 class="md:text-4xl text-3xl font-medium md:font-bold">
                Workshops
            </h1>
            <p class="md:text-xl text-sm">
                Lorem Ipsum has been the industry's standard dummy text ever since
                the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book
            </p>
            <button
                class="px-4 py-3 md:text-xl text-sm bg-red-700 hover:bg-red-800 text-white">
                Subscribe
            </button>
        </div>
    </div>
</div>

<!-- our employees -->
<div
    class="md:flex flex-col md:h-screen items-center md:px-24 md:py-24 py-10 bg-gray-200 md:mt-0 md:mb-0 md:p-2 hidden">
    <h1 class="md:text-4xl text-3xl font-medium md:font-bold">
        Our Employees
    </h1>

    <div
        class="flex md:flex-row flex-col items-center justify-center w-full h-full md:space-x-10 space-y-10">
        <div
            class="flex flex-col w-full h-full space-y-6 items-center justify-center">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/emp1.png"
                alt="card image"
                class="w-[100px] h-[100px] rounded-full mt-10" />
            <p class="text-xl font-semibold">Emily Murphy</p>
            <p class="text-center justify-center md:text-xl text-sm px-8">
                Lorem Ipsum has been the industry's standard dummy text ever since
                the 1500s, when an unknown printer. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown
                printer
            </p>
        </div>
        <div
            class="flex flex-col w-full h-full space-y-6 items-center justify-center">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/emp2.png"
                alt="card image"
                class="w-[100px] h-[100px] rounded-full" />
            <p class="text-xl font-semibold">Mary Smith</p>
            <p class="text-center justify-center md:text-xl text-sm px-8">
                Lorem Ipsum has been the industry's standard dummy text ever since
                the 1500s, when an unknown printer. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown
                printer
            </p>
        </div>
        <div
            class="flex flex-col w-full h-full space-y-6 items-center justify-center">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/emp3.png"
                alt="card image"
                class="w-[100px] h-[100px] rounded-full" />
            <p class="text-xl font-semibold">James Jones</p>
            <p class="text-center justify-center md:text-xl text-sm px-8">
                Lorem Ipsum has been the industry's standard dummy text ever since
                the 1500s, when an unknown printer. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown
                printer
            </p>
        </div>
    </div>
</div>

<!-- our employees mobile section -->

<div
    class="flex flex-col items-center sm:px-24 relative sm:py-24 py-10 bg-gray-200 md:hidden sm:block">
    <h1 class="sm:text-4xl text-3xl font-medium sm:font-bold mb-8">
        Our Employees
    </h1>

    <!-- Carousel Container -->
    <div class="relative w-full max-w-lg mx-auto overflow-hidden">
        <!-- Slides Wrapper -->
        <div
            id="carousel-inner"
            class="flex transition-transform duration-500 ease-in-out"
            style="transform: translateX(0)">
            <!-- Slider 1 -->
            <div
                class="w-full flex-shrink-0 flex flex-col items-center text-center bg-white shadow-lg rounded-lg p-6">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/emp1.png"
                    alt="Emily Murphy"
                    class="w-24 h-24 rounded-full mb-4" />
                <p class="text-xl font-semibold">Emily Murphy</p>
                <p class="text-sm text-gray-600 mt-2">
                    Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s.
                </p>
            </div>
            <!-- Slider 2 -->
            <div
                class="w-full flex-shrink-0 flex flex-col items-center text-center bg-white shadow-lg rounded-lg p-6">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/emp2.png"
                    alt="Mary Smith"
                    class="w-24 h-24 rounded-full mb-4" />
                <p class="text-xl font-semibold">Mary Smith</p>
                <p class="text-sm text-gray-600 mt-2">
                    Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s.
                </p>
            </div>
            <!-- Slider 3 -->
            <div
                class="w-full flex-shrink-0 flex flex-col items-center text-center bg-white shadow-lg rounded-lg p-6">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/emp3.png"
                    alt="James Jones"
                    class="w-24 h-24 rounded-full mb-4" />
                <p class="text-xl font-semibold">James Jones</p>
                <p class="text-sm text-gray-600 mt-2">
                    Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s.
                </p>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button
            id="prev-btn"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 z-10">
            &#8592;
        </button>
        <button
            id="next-btn"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 z-10">
            &#8594;
        </button>
    </div>
</div>

<!-- Gallery Section -->

<div
    class="flex items-center justify-center md:h-screen md:py-24 py-10 md:px-24 md:mt-0 md:mb-0 md:p-2">
    <div
        class="flex flex-col items-stretch justify-center md:space-x-6 space-x-0 w-full h-full sm:flex-row">
        <!-- First Image Column -->
        <div class="flex items-stretch w-100 sm:w-1/2 h-full">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" class="w-full h-full object-cover" />
        </div>

        <!-- Second Column with Nested /images -->
        <div
            class="flex flex-col items-center justify-between md:space-y-6 space-y-0 w-100 sm:w-1/2 h-full">
            <div class="w-full h-1/2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg" class="w-full h-full object-cover" />
            </div>
            <div
                class="flex items-center justify-center md:space-x-6 space-x-0 w-full h-1/2">
                <div class="w-1/2 h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" class="w-full h-full object-cover" />
                </div>
                <div class="w-1/2 h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our story section -->
<div
    class="relative md:h-screen h-[500px] bg-slate-100 flex justify-center items-center md:mt-0 md:mb-0 md:p-2">
    <img
        src="<?php echo get_template_directory_uri(); ?>/images/Ceramic2.jpg"
        alt="hero image"
        class="absolute inset-0 w-full h-full object-cover z-0" />
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black opacity-70"></div>
    <div class="w-full md:px-24">
        <div
            class="relative z-10 flex flex-col items-start justify-start space-y-6 md:w-2/6 w-full p-6">
            <h1 class="text-4xl font-bold text-white">Our story</h1>
            <p class="md:text-xl text-sm text-start text-slate-200">
                Lorem Ipsum has been the industry's standard dummy text ever since
                the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book
            </p>
        </div>
    </div>
</div>

<?php
get_footer();
?>
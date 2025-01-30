<?php
$homeurl = get_permalink();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ceramic</title>
    <?php wp_head(); ?>
</head>

<body class="md:mx-2 font-customFont">
    <!--Navbar section-->
    <nav class="bg-white p-4">
        <!-- Mobile Menu Button -->
        <div class="flex justify-between items-center md:hidden">
            <a href="#" class="text-2xl text-amber-700"><i class="fa-solid fa-bars" id="menu-toggle"></i></a>
            <a href="http://designtolivetheme.local/" class="text-black text-2xl">

                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>


                <img src="<?php echo $logo[0]; ?>" alt="Logo" /></a>
        </div>



        <!-- Desktop Menu -->
        <div
            class="container mx-auto hidden md:flex justify-between items-center">
            <a href="http://designtolivetheme.local/" class="text-black text-2xl ml-44">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>

                <img src="<?php echo $logo[0]; ?>" alt="Logo" />
            </a>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'menu_class' => 'flex space-x-6 mr-44',
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'container_class' => 'hidden md:flex justify-between items-center' // this is the class that is added to the 

                )
            )
            ?>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden flex-col space-y-4 mt-4 md:hidden">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'mobile',
                    'theme_location' => 'mobile',
                    'menu_class' => 'py-2 text-sm text-black dark:text-amber-800',
                    'items_wrap' => '<ul class="">%3$s</ul>',
                    'container_class' => 'md:flex justify-between items-center' // this is the class that is added to the container div

                )
            )
            ?>
        </div>
    </nav>
    <!--end of navbar section-->
    <!--header section-->
<?php
get_header(); //header

the_post(); // read the content as post
?>

<!-- //here call the title of the page -->
<h2><?php the_title(); ?></h2>
<div><?php echo the_post_thumbnail(); //loads the featured image
        ?></div>
<div><?php the_excerpt(); ?></div>
<div>
    <?php the_content(); //loads the content 
    ?>
</div>


<?php
get_footer(); //footer
?>
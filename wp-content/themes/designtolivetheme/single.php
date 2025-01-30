<!-- // single post page template -->
<?php
get_header(); // call the header
the_post();
?>
<!-- single post  -->
<div>
    <!-- //post  -->
    <div>
        <h1><?php the_title(); ?></h1>
        <p><?php the_author(); ?></p>
        <p><?php echo get_the_date(); ?></p> <br>
        <!-- get the content  -->
        <div> <?php the_content(); ?></div>
    </div>
    <!-- //comments  -->
    <div>
        <?php
        comments_template('/comments.php');
        ?>
    </div>
</div>
<?php
get_footer(); // call the footer
?>
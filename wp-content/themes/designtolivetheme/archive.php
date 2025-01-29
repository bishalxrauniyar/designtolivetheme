<?php get_header(); ?>
<div class="container">
    <h1><?php the_archive_title(); ?></h1>
    <p><?php the_archive_description(); ?></p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
    <?php endwhile;
    endif; ?>

    <div class="pagination">
        <?php the_posts_pagination(); ?>
    </div>
</div>
<?php get_footer(); ?>
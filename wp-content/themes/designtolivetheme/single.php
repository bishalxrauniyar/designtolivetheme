<?php
get_header();
?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="cm-post-list mb-5">
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <?php
            if (! has_excerpt()) {
                echo '';
            } else {
                the_excerpt();
            } ?>
            <?php $project_info = get_post_meta(get_the_ID(), 'catmom_textarea', true);
            if ($project_info): ?>
                <p class="project-meta"><?php echo $project_info; ?></p>
            <?php endif; ?>

            <?php the_post_thumbnail(); ?>
        </div><?php
            endwhile;
        else :
            // When no posts are found, output this text.
            _e('Sorry, no posts matched your criteria.');
        endif;
        wp_reset_postdata(); ?>
<?php
get_footer();
?>
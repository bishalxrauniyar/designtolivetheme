<?php
if (have_comments()) {
?>
    <ul class="comment-list">
        <?php
        wp_list_comments(array(
            'avatar_size' => 40,
            'max_depth' => 5,
            'style' => 'ol',
            'short_ping' => true,
            'type' => 'comment',
        ));
        ?>
    </ul>
    <!-- .comment-list -->
<?php
} else {
    echo "<p>No comments yet. Be the first to comment!</p>";
}

// Display the comment form regardless of whether there are comments
?>
<div>
    <?php comment_form(); ?>
</div>
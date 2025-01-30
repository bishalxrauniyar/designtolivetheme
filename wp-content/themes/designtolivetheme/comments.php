<?php
if (have_comments()) {
?>
    <ul class="comment-list">
        <?php
        wp_list_comments(array(
            'avatar_size' => 50, // size of the avatar picture picture
            'max_depth' => 5, // maximum depth of the comments
            'style' => 'li', // style of the comments
            'type' => 'comment', // type of the comments
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
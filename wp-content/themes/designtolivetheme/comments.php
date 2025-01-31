<?php
if (have_comments()) {
?>
    <ul class="comment-list">
        <?php
        wp_list_comments(array(
            'avatar_size' => 50, // size of the avatar picture
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
<style>
    .comment-list {
        list-style-type: none;
        padding: 0;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 0;
    }

    .comment-list ul {
        list-style-type: decimal;
        padding-left: 1.5em;
    }

    .comment-list li {
        margin-bottom: 1.5em;
        padding: 1em;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
    }

    .comment-list .comment-author {
        font-weight: bold;
        margin-bottom: 0.5em;
    }

    .comment-list .comment-meta {
        font-size: 0.875em;
        color: #555;
        margin-bottom: 0.5em;
    }

    .comment-list .comment-body {
        margin-top: 0.5em;
    }

    .comment-list .avatar {
        float: left;
        margin-right: 1em;
        border-radius: 50%;
    }

    .comment-list .reply {
        margin-top: 0.5em;
    }

    .comment-list .children {
        margin-left: 2em;
        border-left: 2px solid #ddd;
        padding-left: 1em;
    }

    .comments {
        margin-top: 40px;
    }
</style>
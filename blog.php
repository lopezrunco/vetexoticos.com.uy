<?php
/*
Template Name: Blog Template
*/
get_header();

// Include WordPress main file
require_once('wp-load.php');
?>

<div class="container">
    <?php
    // Set up pagination
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // Get the latest blog posts
    $args = array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 5, // Number of posts per page
        'paged'          => $paged,
        'orderby'        => 'date',
        'order'          => 'DESC'
    );
    $query = new WP_Query($args);

    // Check if there are any posts
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                </div>
            <?php endif; ?>
            <p><?php the_content(); ?></p>
    <?php
        }
        // Pagination
        echo '<div class="pagination">';
        echo paginate_links(array(
            'total' => $query->max_num_pages
        ));
        echo '</div>';
    } else {
        echo 'No posts found';
    }

    // Restore original post data
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
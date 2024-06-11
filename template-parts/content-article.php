<section>
    <article class="container">
        <?php
        // Check if it's a single blog post page and show content accordingly.
        if (is_single() && !is_product()) :
        ?>
            <header class="content-header mb-3">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="full-width-img mb-4">
                        <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $img_url = wp_get_attachment_image_url($thumbnail_id, 'large');
                        ?>
                        <img class="w-100 border-radius" src="<?php echo esc_url(($img_url)) ?>" alt="<?php the_title_attribute(); ?>">
                    </div>
                <?php endif; ?>
                <div class="meta">
                    <span class="date">
                        <i class="fa-solid fa-calendar-days me-2"></i>
                        <?php echo get_the_date('j \d\e F \d\e Y'); ?>
                    </span>
                    <span class="author">
                        <i class="fa-solid fa-user me-2"></i>
                        <?php the_author(); ?>
                    </span>
                    <div>
                        <?php
                        the_tags(
                            '<span class="tag"><i class="fa fa-tag me-2"></i> ',
                            '</span><span class="tag"><i class="fa fa-tag me-2"></i>',
                            '</span>'
                        );
                        ?>
                    </div>
                    <span class="comment">
                        <a href="#comments"><i class='fa fa-comment me-2'></i>
                            <?php comments_number(); ?>
                        </a>
                    </span>
                </div>
            </header>
        <?php endif; ?>

        <div class="content-body">
            <?php
            the_content();
            // Comments section
            comments_template();
            ?>
        </div>
    </article>
</section>
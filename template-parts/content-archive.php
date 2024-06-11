<div class="container">
    <div class="post my-5">
        <div class="media">
            <img width="200px" class="mr-3 img-fluid post-thumb d-none d-md-flex border-radius" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
            <div class="media-body">
                <h3 class="title mb-1">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="meta mb-1">
                    <span class="date">
                        <?php the_date(); ?>
                    </span>
                    <span class="comment">
                        <a href="#">
                            <?php comments_number(); ?>
                        </a>
                    </span>
                </div>
                <div class="intro">
                    <?php the_excerpt(); ?>
                </div>
                <a class="more-link" href="
                    <?php the_permalink(); ?>
                ">Ver más &rarr;</a>
            </div>
        </div>
    </div>
</div>
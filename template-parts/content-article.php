<section>
    <article class="container">
        <header class="content-header mb-3">
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

        <?php
        the_content();
        comments_template();
        ?>

    </article>
</section>
<?php
get_header();
?>

<article>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-5">Page not found</h1>
            </div>
            <div class="col-lg-6">
                <p>The page you are looking for has been moved or deleted.</p>
                <p>Please, return to the home page or search for something in the search box.</p>

                <a href="index.php" class="btn btn-primary">Back to Home page</a>
            </div>
            <div class="col-lg-6">

                <?php
                get_search_form();
                ?>

            </div>
        </div>
    </div>
</article>

<?php
get_footer();
?>
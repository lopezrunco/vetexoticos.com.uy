<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vetexoticos Wordpress theme">
    <meta name="author" content="Tecnomedios">
    <link rel="shortcut icon" href="/wp-content/themes/vetexoticos/assets/images/logo.png">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <small><i class="fa-solid fa-location-dot me-1"></i> Montevideo, Uruguay</small>
                    </div>
                    <div class="col-6">
                        <div class="account-options">
                            <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">
                                <i class="fas fa-user"></i>
                            </a>
                            <a href="<?php echo wc_get_cart_url(); ?>">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge bg-secondary"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-xl bg-primary py-lg-0">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="main-logo" alt="Logo de Vetexoticos.uy" src="<?php echo get_template_directory_uri(); ?>/assets/images/vetexoticos-inverted.jpg" />
                </a>
                <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars menu-icon"></i>
                </button>
                <div class="collapse navbar-collapse py-3 justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <?php
                            // Get the parent category by slug.
                            $parent_category = get_term_by('slug', 'especie','product_cat');
                            // Check if parent category exists.
                            if ( $parent_category ) {
                                // Get subcategories from the parent category.
                                $subcategories = get_terms( array(
                                    'taxonomy' => 'product_cat',
                                    'parent' => $parent_category->term_id,
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => true
                                ) );

                                // Check if sub categories exist.
                                if (! empty( $subcategories ) && ! is_wp_error( $subcategories )) {
                                    // Generate main menu item with dropdown.
                                    echo '<li class="nav-item dropdown">';
                                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tienda</a>';
                                            // Generate dropdown menu with sub categories.
                                        echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                                            foreach ($subcategories as $subcategory) {
                                                echo '
                                                    <li>
                                                        <a class="dropdown-item" href="' . get_term_link( $subcategory ) . '">' . $subcategory->name  .'</a>
                                                    </li>
                                                ';
                                            }
                                        echo '</ul>';
                                    echo '</li>';
                                } else {
                                    echo '<p>No se encontraron categorías.</p>';
                                }
                            } else {
                                echo '<p>No se encontró la categoria padre.</p>';
                            }
                        ?>
                    </ul>
                    <?php
                    // Main menu
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navbar-nav mb-2 mb-lg-0">%3$s</ul>',
                        'fallback_cb' => false
                    ));
                    ?>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-wrapper">
        <?php if (!is_front_page() && !is_404()) : ?>
            <header class="page-title">
                <h2 class="heading">
                    <?php the_title(); ?>
                </h2>
            </header>
        <?php endif; ?>
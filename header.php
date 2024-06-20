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

    <?php
    wp_head();
    ?>

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

        <nav class="navbar navbar-expand-lg bg-light py-lg-0">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="main-logo" src="https://vetexoticos.uy/wp-content/uploads/2024/06/logo.png" alt="Logo Vetexoticos">
                </a>
                <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse py-3" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
                        )
                    );
                    ?>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-wrapper">
        <?php if (!is_front_page() && !is_404() ) : ?>
            <header class="page-title bg-primary">
                <div class="paws-overlay">
                <h2 class="heading">
                    <?php
                    the_title();
                    ?>
                </h2>
                </div>
            </header>
        <?php endif; ?>
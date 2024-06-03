<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vetexoticos Wordpress theme">
    <meta name="author" content="Damian Lopez">
    <link rel="shortcut icon" href="/wp-content/themes/vetexoticos/assets/images/logo.png">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
    wp_head();
    ?>

</head>

<body>

    <header class="header text-center">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars menu-icon"></i>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-lg-row flex-column">

                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="logo" src="<?php echo $logo[0] ?>" alt="logo">
                </a>

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar-nav flex-lg-row flex-column text-sm-center text-md-left">%3$s</ul>'
                    )
                );
                // dynamic_sidebar('sidebar-1');
                ?>

            </div>
        </nav>
        </div>
    </header>
    <div class="main-wrapper">
        <?php if (!is_front_page()) : ?>
            <header class="page-title theme-bg-light text-center gradient py-3">
                <h1 class="heading">
                    <?php
                    the_title();
                    ?>
                </h1>
            </header>
        <?php endif; ?>
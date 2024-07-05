<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(' | ', true, 'right'); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo TEMPPATH; ?>/assets/images/verardi/favicon.png">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H867RFNKJY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-H867RFNKJY');
    </script>

    <?php wp_head() ?>
</head>

<body>
    <!-- page wrapper -->
    <div class="page-wrapper">
        <div>

            <!-- Header Main Area -->
            <header class="site-header header-style-1">
                <div class="pbmit-header-overlay">
                    <div class="pbmit-pre-header-wrapper pbmit-text-color-white">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between">
                                <div class="pbmit-pre-header-left">
                                </div>
                                <div class="pbmit-pre-header-right">
                                    <ul class="pbmit-contact-info">
                                        <?php wp_nav_menu(array('theme_location' => 'menu_secondario', 'container' => 'ul', 'menu_class' => 'npbmit-contact-info navigation')); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-main-header-area">
                        <div class="container-fluid">
                            <div class="pbmit-header-content d-flex align-items-center justify-content-between">
                                <div class="site-branding">
                                    <div class="site-title">
                                        <?php
                                        if (function_exists('the_custom_logo')) {
                                            the_custom_logo();
                                        } ?>
                                    </div>
                                </div>
                                <div class="pbmit-menuarea d-flex align-items-center">
                                    <div class="site-navigation">
                                        <nav class="main-menu navbar-expand-xl navbar-light">
                                            <div class="navbar-header">
                                                <!-- Toggle Button -->
                                                <button class="navbar-toggler" type="button">
                                                    <i class="pbmit-base-icon-menu-1"></i>
                                                </button>
                                            </div>
                                            <!--<div class="pbmit-mobile-menu-bg"></div>-->
                                            <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                                <div class="pbmit-menu-wrap">
                                                    <span class="closepanel">
                                                        <i class="pbmit-base-icon-close-circular-button-symbol"></i>
                                                    </span>
                                                    <?php wp_nav_menu(array('theme_location' => 'menu_principale', 'container' => 'ul', 'menu_class' => 'navigation clearfix', 'depth' => 0, 'walker' => new Header_Menu_Walker)) ?>

                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="pbmit-right-box d-flex align-items-center">
                                        <div class="pbmit-button-box">
                                            <div class="pbmit-header-button">
                                                <div class="pbmit-svg-btn pbmit-ihbox-btn">
                                                    <a href="<?php echo HOME; ?>/contatti" class="pbmit-btn pbmit-btn-outline">
                                                        <span class="pbmit-header-button-text">
                                                            CONTATTI
                                                            <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
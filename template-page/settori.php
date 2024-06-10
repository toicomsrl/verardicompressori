<?php /*Template Name: Pagina Settore */ ?>


<?php get_header() ?>

<?php
get_template_part('template-part/hero-settori');
?>

<div class="page-content">
    <div class="site-content ">

        <?php
        $items = get_field('settori_link_menu_interno');

        if (!empty($items)) {
        ?>

            <div class="menu-settore-container">
                <div class="container">
                    <div class="row">
                        <?php foreach ($items as $item) { ?>
                            <div class="col-md-4">
                                <div class="settore-menu-item">
                                    <a href="<?php echo $item["link"]; ?>">
                                        <span class="font-bold" style="margin-right: 50px; margin-left: 0"><?php echo $item["testo_link"]; ?></span>
                                        <img src=" <?php echo TEMPPATH; ?>/assets/images/verardi/arrow-grey.png" alt="">
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        <?php } ?>

        <div class="container-bianco-testo">
            <div class="container">
                <div class="row testo">
                    <div class="col-12">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php get_footer() ?>
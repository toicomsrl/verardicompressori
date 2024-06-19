<?php /*Template Name: Pagina Prodotto */ ?>


<?php get_header() ?>

<?php
get_template_part('template-part/hero-prodotti');
?>



<div class="page-content">
    <div class="site-content ">

        <?php
        $items = get_field('prodotto_link_menu_interno');

        if (!empty($items)) {
        ?>

            <div class="menu-settore-container">
                <div class="container">
                    <div class="row">
                        <?php foreach ($items as $item) { ?>
                            <div class="col-md-4">
                                <div class="settore-menu-item">
                                    <a href="<?php echo $item["ancora"]; ?>">
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

        <section class="section-lgx container-bianco-testo">
            <div class="container">
                <div class="row testo">
                    <div class="col-12">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer() ?>
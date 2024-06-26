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
                                    <div class="pbmit-ihbox-style-5">
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                <?php if (isset($item["ancora"])) { ?>
                                                    <a href="<?php echo $item["ancora"] == '#' ? $item["link"] : $item["ancora"]; ?>">
                                                    <?php } else { ?>
                                                        <a href="<?php echo $item["link"]; ?>">
                                                        <?php } ?>
                                                        <span>
                                                            <?php echo $item["testo_link"]; ?>
                                                            <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                            </svg>
                                                        </span>
                                                        </a>
                                            </h2>
                                            <div class="pbmit-ihbox-btn">
                                                <?php if (isset($item["ancora"])) { ?>
                                                    <a href="<?php echo $item["ancora"] == '#' ? $item["link"] : $item["ancora"]; ?>">
                                                    <?php } else { ?>
                                                        <a href="<?php echo $item["link"]; ?>">
                                                        <?php } ?>
                                                        <span>
                                                            <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19" height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                            </svg>
                                                        </span>
                                                        </a>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-wapper"></div>
                                    </div>

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

        <?php get_footer() ?>
<?php get_header() ?>

<?php get_template_part('template-part/hero-base'); ?>

<div class="page-content">
    <div class="site-content ">
        <section class="section-lgx container-bianco-testo">
            <div class="container">
                <div class="row testo">
                    <div class="col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php get_footer() ?>
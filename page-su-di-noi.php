<?php get_header() ?>

<?php get_template_part('template-part/hero-base') ?>

<div class="page-content">
    <!-- Ihbox -->
    <section class="section-lgx">
        <div class=" container">
            <div class="row testo">
                <div class="col-12">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Ihbox End -->
</div>

<?php get_footer() ?>
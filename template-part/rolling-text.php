<?php $scrittaCheScorre = get_query_var('scritta_che_scorre'); ?>

<section class="section-lgx pbminfotech-element-marquee-effect">
    <div class="container-fluid p-0">
        <div class="swiper-slider marquee">
            <div class="swiper-wrapper">
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <div class="pbmit-element-title">
                            <?php echo $scrittaCheScorre ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="swiper-slider marquee" data-reverse="true">
            <div class="swiper-wrapper">
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <div class="pbmit-element-title">
                            <?php echo $scrittaCheScorre ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
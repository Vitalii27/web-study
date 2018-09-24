<div class="s-promo s-promo--thin" id="comparison">
    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <div class="b-promo b-promo--prime">
                <?php if (get_field('home_two_bg')): ?>
                    <div class="b-promo__img"
                         style="background-image:url(<?php the_field('home_two_bg') ?>);"></div>
                <?php endif; ?>
                <div class="b-promo__inner">
                    <div class="row">
                        <div class="col col--xxl-9 col--xl-10">

                            <?php if (get_field('home_two_title')): ?>
                                <div class="b-promo__title"><?php the_field('home_two_title') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_two_desc')): ?>
                                <div class="b-promo__text">
                                    <?php the_field('home_two_desc') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_two_desc_text')): ?>
                                <div class="b-promo__footer"><a class="btn btn--round btn--gradient js-pop-up"
                                                                href="#callback"><?php the_field('home_two_desc_text') ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .b-promo-->
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</div>
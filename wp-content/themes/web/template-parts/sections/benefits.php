<div class="s-seo-benefit">
    <div class="s-seo-benefit--before" style="background-image:url(<?php the_field('benefits_bg') ?>);"></div>
    <div class="grid grid--container">
        <div class="col col--xl-6 col--md-8 col--xs-10 col--xl-offset-6 col--md-offset-4 col--xs-offset-2">
            <div class="b-seo-benefits">
                <?php if (get_field('benefits_title')): ?>
                    <div class="e-title"><?php the_field('benefits_title') ?></div>
                <?php endif; ?>
                <?php if (have_rows('benefits_reap_new')): ?>
                    <?php while (have_rows('benefits_reap_new')): the_row(); ?>
                        <div class="b-seo-benefit">
                            <div class="b-seo-benefit__icon">
                                <?php if (get_sub_field('benefits_icon')): ?>
                                    <img src="<?php the_sub_field('benefits_icon') ?>" alt="img" class="icon">
                                <?php endif; ?>
                            </div>
                            <?php the_sub_field('benefits_text') ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- .b-seo-benefit-->
                <?php if (get_field('benefits_text_button')): ?>
                    <!-- .b-seo-benefit-->
                    <div class="b-seo-benefits__footer"><a class="btn btn--round btn--gradient js-pop-up"
                                                           href="#callback"><?php the_field('benefits_text_button') ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <!-- .b-seo-benefits-->
        </div>
        <!-- .col-->
    </div>
    <!-- .grid-->
</div>
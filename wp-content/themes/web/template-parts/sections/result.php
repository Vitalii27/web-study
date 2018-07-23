<div class="s-result">
    <div class="row">
        <?php if (get_field('home_profit')): ?>
            <div class="col col--xxl-6 col--xxl-offset-3 col--xl-8 col--xl-offset-2 col--lg-8 col--lg-offset-2 col--md-8 col--md-offset-2 col--sm-10 col--sm-offset-1">
                <div class="e-title text--xs-center"> <?php the_field('home_profit') ?></div>
            </div>

        <?php endif; ?>
        <!-- .col-->
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <div class="b-results row">
                <?php if (have_rows('home_profit_reap')): ?>
                    <?php while (have_rows('home_profit_reap')):
                        the_row(); ?>

                        <div class="col col--lg-3 col--sm-6 col--sm-flex">
                            <div class="b-result">
                                <?php if (get_sub_field('home_profit_icon')): ?>
                                    <img class="icon icon-full" src="<?php the_sub_field('home_profit_icon') ?>"
                                         alt="img">
                                <?php endif; ?>
                                <?php if (get_sub_field('home_profit_title')): ?>
                                    <div class="b-result__title"><?php the_sub_field('home_profit_title') ?></div>
                                <?php endif; ?>
                                <?php the_sub_field('home_profit_desc') ?>
                                <?php if (get_sub_field('home_profit_btn_text')): ?>
                                    <a class="b-result__link js-pop-up" href="#callback">
                                        <div class="inner"><?php the_sub_field('home_profit_btn_text') ?></div>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <!-- .b-result-->
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- .col-->
            </div>
            <!-- .b-results-->
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</div>
<!-- .S-RESULT-->
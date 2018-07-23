<div class="s-makepath" style="background-image:url(<?php the_field('home_third_bg') ?>);">
    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <?php if (get_field('home_third')): ?>
                <div class="e-title e-title--light text--xs-center"><?php the_field('home_third') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('home_third_sub')): ?>
                <div class="s-makepath__subtitle"><?php the_field('home_third_sub') ?></div>
            <?php endif; ?>
        </div>
        <!-- .col-->
        <div class="col col--xl-10 col--xl-offset-1">
            <div class="b-makepaths">
                <div class="b-makepath one">
                    <?php if (get_field('home_third_sub_left')): ?>
                        <div class="b-makepath__inner">
                            <svg class="icon icon-big-megafon">
                                <use xlink:href="assets/img/sprite.svg#megafon"></use>
                            </svg>
                            <?php the_field('home_third_sub_left') ?>
                        </div>
                        <div class="b-makepath__path"></div>
                    <?php endif; ?>
                </div>
                <div class="b-makepath two">
                    <?php if (get_field('home_third_sub_center')): ?>
                        <div class="b-makepath__inner">
                            <svg class="icon icon-big-diagram">
                                <use xlink:href="assets/img/sprite.svg#diagram"></use>
                            </svg>
                            <?php the_field('home_third_sub_center') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="b-makepath three">
                    <div class="b-makepath__path"></div>
                    <?php if (get_field('home_third_sub_right')): ?>
                        <div class="b-makepath__inner">
                            <svg class="icon icon-big-uplevel">
                                <use xlink:href="assets/img/sprite.svg#uplevel"></use>
                            </svg>
                            <?php the_field('home_third_sub_right') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</div>
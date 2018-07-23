<div class="s-compare">
    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <?php if (get_field('home_two_srav')): ?>
                <div class="e-title e-title--color text--xs-center"> <?php the_field('home_two_srav') ?></div>
            <?php endif; ?>
            <div class="b-compares row">
                <?php if (have_rows('home_advn_reap')): ?>
                    <?php while (have_rows('home_advn_reap')): the_row(); ?>

                        <div class="col col--md-6 col--sm-flex">
                            <div class="b-compare">
                                <?php if (get_sub_field('home_advn_img')): ?>
                                    <div class="b-compare__title"
                                         style="background-image:url( <?php the_sub_field('home_advn_img') ?>);">
                                        <?php the_sub_field('home_section_titl') ?>
                                    </div>
                                <?php endif; ?>
                                <div class="b-compare__body">
                                    <?php if (get_sub_field('home_advn_icon-home')): ?>
                                    <div class="b-compare__circle">

                                        <img src="<?php the_sub_field('home_advn_icon-home') ?>" alt="icon" class="icon icon-big-diamond">
                                    </div>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('home_advantages_title')): ?>
                                        <div class="b-compare__part positive"><?php the_sub_field('home_advantages_title') ?></div>
                                    <?php endif; ?>
                                    <?php if (have_rows('home_advantages')): ?>
                                        <?php while (have_rows('home_advantages')): the_row(); ?>

                                            <div class="b-compare-item plus">
                                                <?php if (get_sub_field('home_advn_title')): ?>
                                                    <div class="b-compare-item__title"><?php the_sub_field('home_advn_title') ?></div>
                                                <?php endif; ?>
                                                <ul class="b-compare-item__list">
                                                    <?php if (have_rows('home_advn_description')): ?>
                                                        <?php while (have_rows('home_advn_description')): the_row(); ?>

                                                            <li><?php the_sub_field('home_advn_description_text') ?></li>

                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <!-- .b-compare-item-->
                                    <?php if (get_sub_field('home_advn_min')): ?>
                                        <div class="b-compare__part negative"><?php the_sub_field('home_advn_min') ?></div>
                                    <?php endif; ?>
                                    <?php if (have_rows('home_advn_description_min')): ?>
                                        <?php while (have_rows('home_advn_description_min')): the_row(); ?>

                                            <div class="b-compare-item minus">
                                                <div class="b-compare-item__title"><?php the_sub_field('home_advn_description_min_title') ?>
                                                </div>
                                                <ul class="b-compare-item__list">
                                                    <?php if (have_rows('home_advn_description_min_no-advantages')): ?>
                                                        <?php while (have_rows('home_advn_description_min_no-advantages')): the_row(); ?>

                                                            <li><?php the_sub_field('home_advn_description_text_min') ?></li>

                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <!-- .b-compare__body-->
                            </div>
                            <!-- .b-compare-->
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- .col-->

                <!-- .col-->
            </div>
            <!-- .b-compares-->
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</div>
<!-- .S-COMPARE-->
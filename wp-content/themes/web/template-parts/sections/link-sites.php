<div class="section section--colored">
    <div class="s-worktypes" style="background-image:url( <?php the_field('home_business_bg') ?>);">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <?php if (get_field('home_business_title')): ?>
                    <div class="e-title e-title--light text--xs-center"><?php the_field('home_business_title') ?></div>
                <?php endif; ?>
                <div class="b-worktypes row">
                    <?php if (have_rows('home_business_reap')): ?>
                        <?php while (have_rows('home_business_reap')):
                            the_row(); ?>
                            <div class="col col--xl-3 col--sm-6 col--sm-flex">
                                <div class="b-worktype">
                                    <div class="b-worktype__header">
                                        <?php if (get_sub_field('home_business_icon')): ?>
                                            <img class="icon"
                                                 src="<?php the_sub_field('home_business_icon') ?>"
                                                 alt="img">
                                        <?php endif; ?>
                                        <?php if (get_sub_field('home_business_title_reap')): ?>
                                            <div class="b-worktype__title"><?php the_sub_field('home_business_title_reap') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (get_sub_field('home_business_btn_text')): ?>
                                        <div class="b-worktype__desc">
                                            <a class="b-worktype__link"
                                               href="<?php the_sub_field('home_business_btn_link') ?>"><?php the_sub_field('home_business_btn_text') ?></a>
                                            <p><?php the_sub_field('home_business_desc') ?></p>
                                            <?php if (get_sub_field('home_business_price')): ?>
                                                <div class="b-worktype__price">
                                                    <?php the_sub_field('home_business_price') ?><span> рублей</span>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- .b-worktype-->
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- .col-->


                </div>
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
</div>
    <!-- .S-WORKTYPES-->
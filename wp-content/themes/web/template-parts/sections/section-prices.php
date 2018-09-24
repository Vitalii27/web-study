<div class="section section--colored section--prices">
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
                            <div class="col col--xl-4 col--sm-6 col--sm-flex">
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

                                            <p><?php the_sub_field('home_business_desc') ?></p>
                                            <?php if (get_sub_field('home_business_price')): ?>
                                                <div class="b-worktype__price">
                                                    <?php the_sub_field('home_business_price') ?><span> рублей</span>

                                                </div>
                                            <?php endif; ?>
                                            <a class="b-worktype__link js-pop-up"
                                               href="<?php the_sub_field('home_business_btn_link') ?>"><?php the_sub_field('home_business_btn_text') ?></a>
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
<div class="s-seo-workpath section-price-desc section--colored">
    <div class="grid grid--container">
        <div class="row">
            <div class="seo-desc-price-container">


                <?php if (get_field('seo_price-title')): ?>
                    <!--                    <div class="col col--xxl-8 col--xxl-offset-2 col--xl-8 col--xl-offset-2">-->
                    <div class="e-title text--xs-center"><?php the_field('seo_price-title') ?></div>
                    <!--                    </div>-->
                <?php endif; ?>
                <!-- .col-->

                <?php if (have_rows('section-seo-price-text')): ?>

                        <ul class="seo_list-price">
                            <?php while (have_rows('section-seo-price-text')):
                                the_row(); ?>
                                <li class="seo_item-price">
                                    <?php if (get_sub_field('seo_price-title-list')): ?>
                                        <h4 class="seo_item-title"><?php the_sub_field('seo_price-title-list') ?></h4>
                                    <?php endif; ?>
                                    <?php the_sub_field('seo_price-title-desc') ?>
                                </li>

                            <?php endwhile; ?>
                        </ul>


                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<!-- .S-WORKTYPES-->
<div class="s-hero row row--md-center">

    <!-- .s-hero__top-->
    <div class="s-hero__body">
        <div class="row">
            <div class="col col--xxl-6 col--xxl-offset-5 col--xl-6 col--xl-offset-5 col--lg-7 col--lg-offset-5 col--md-7 col--md-offset-5">
                <div class="b-hero">
                    <?php if (get_field('home_title')): ?>
                        <h1><?php the_field('home_title') ?></h1>
                    <?php endif; ?>
                    <?php if (get_field('home_subtitle')): ?>

                        <p><?php the_field('home_subtitle') ?></p>
                    <?php endif; ?>

                    <?php if (have_rows('home_tech')): ?>
                        <ul>
                            <?php while (have_rows('home_tech')): the_row(); ?>
                                <?php if (get_sub_field('home_tech_name')): ?>
                                    <li><?php the_sub_field('home_tech_name') ?><i>*</i></li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>

                    <?php endif; ?>
                    <?php if (get_field('home_gar')): ?>
                        <div class="b-hero__accent"><?php the_field('home_gar') ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .s-hero__body-->
    <div class="s-hero__bottom">
        <svg class="icon icon-mouse">
            <use xlink:href=<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#mouse"></use>
        </svg>
        <div class="row">
            <div class="col col--xxl-2 col--xxl-offset-2 col--xl-3 col--xl-offset-1 col--lg-3 col--lg-offset-1">
                <div class="b-hero-contacts"><a href="#">
                        <svg class="icon icon-phone">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#phone"></use>
                        </svg>
                    </a><a href="#">
                        <svg class="icon icon-location">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#location"></use>
                        </svg>
                    </a><a href="#">
                        <svg class="icon icon-calendar">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#calendar"></use>
                        </svg>
                    </a></div>
                <!-- .b-hero-contacts-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .s-hero__bottom-->
</div>
<!-- .S-HERO-->
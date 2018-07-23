<div class="s-about <?php the_field('about_radio_check') ?>">

    <?php if (get_field('about_section_title')): ?>
        <div class="e-title"><?php the_field('about_section_title') ?></div>
    <?php endif; ?>
    <div class="b-about row">
        <?php if (get_field('about_section_subtitle')): ?>
            <div class="col col--xxl-4 col--xxl-offset-6 col--xl-5 col--xl-offset-6 col--lg-7 col--lg-offset-5">
                <div class="b-about__title b-text">
                    <?php the_field('about_section_subtitle') ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- .col-->
        <?php if (get_field('about_section_img')): ?>
            <div class="col col--xxl-4 col--xxl-offset-2 col--xl-5 col--xl-offset-1 col--lg-5"><img class="s-about__img"
                                                                                                    src="<?php the_field('about_section_img') ?>"
                                                                                                    alt="about"></div>
        <?php endif; ?>
        <!-- .col-->
        <div class="col col--xxl-4 col--xl-5 col--lg-6">
            <div class="b-about__text b-text">
                <?php if (get_field('about_section_block1')): ?>
                    <div class="b-about__content b-about__content--columns">
                        <?php the_field('about_section_block1') ?>
                    </div>

                <?php endif; ?>
                <svg class="icon icon-arrow-down-long">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow-down-long"></use>
                </svg>
            </div>
        </div>
        <!-- .col-->
        <div class="margin-top col col--xxl-5 col--xxl-offset-4 col--xl-6 col--xl-offset-3 col--lg-8 col--lg-offset-2">
            <?php if (get_field('about_section_block2')): ?>
                <div class="b-about__content b-text text--xs-center">
                    <?php the_field('about_section_block2') ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('about_section_text')): ?>
                <div class="text--xs-center"><a class="btn btn--round btn--border-dark"
                                                href=" <?php the_field('about_section_link') ?>"> <?php the_field('about_section_text') ?></a>

                </div>
            <?php endif; ?>
        </div>
        <!-- .col-->
    </div>
    <!-- .b-about-->
</div>
<!-- .S-ABOUT-->
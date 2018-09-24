<div class="s-seo-target" style="background-image:url(<?php the_field('seo_bg') ?>);">
    <div class="grid grid--container">
        <?php if (get_field('seo_title')): ?>
            <div class="e-title text--xs-center"><?php the_field('seo_title') ?></div>
        <?php endif; ?>
        <div class="b-seo-targets">
            <?php if (get_field('seo_subtitle')): ?>
                <div class="b-seo-targets__title"><?php the_field('seo_subtitle') ?></div>
            <?php endif; ?>
            <?php if (have_rows('seo_row')):
                ?>
                <?php while (have_rows('seo_row')):
                the_row();
                ?>
                <div class="b-seo-targets__row row">
                    <?php if (have_rows('seo_list')):
                        ?>
                        <?php while (have_rows('seo_list')):
                        the_row();
                        ?>

                        <div class="col col--md-4">
                            <div class="b-seo-target">
                                <?php if (get_sub_field('seo_list-img')): ?>
                                    <img src="<?php the_sub_field('seo_list-img') ?>" alt="icon" class="icon icon-lamp">
                                <?php endif; ?>
                                <!--                                <svg class="icon icon-lamp">-->
                                <!--                                    <use xlink:href="-->
                                <?php //echo get_template_directory_uri()
                                ?><!--/assets/images/sprite.svg#lamp"></use>-->
                                <!--                                </svg>-->
                                <p><?php the_sub_field('seo_description') ?></p>
                            </div>
                        </div>
                        <!-- .col-->
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- .col-->
                </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- .b-seo-targets-->
    </div>
</div>
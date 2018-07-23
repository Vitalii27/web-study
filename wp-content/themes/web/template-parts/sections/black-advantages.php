<div class="s-path" style="background-image:url(<?php the_field('balck_section_bg') ?>);">

    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <div class="b-paths row">
                <?php if (have_rows('balck_section_reap')):
                    ?>
                    <?php while (have_rows('balck_section_reap')):
                    the_row();
                    ?>


                    <div class="col col--md-3 col--sm-6">
                        <div class="b-path">
                            <?php if (get_sub_field('balck_section_title')): ?>
                            <div class="b-path__title">
                                <svg class="icon icon-arrow-right-long">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow-down-long"></use>
                                </svg><?php the_sub_field('balck_section_title') ?>
                                <?php endif; ?>

                            </div>

                            <?php the_sub_field('balck_section_desc') ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

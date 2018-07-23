<div class="s-seo-workpath">
    <div class="grid grid--container">
        <div class="row">
            <?php if (get_field('seo_title_ya')): ?>
                <div class="col col--xxl-8 col--xxl-offset-2 col--xl-8 col--xl-offset-2">
                    <div class="e-title text--xs-center"><?php the_field('seo_title_ya') ?></div>
                </div>
            <?php endif; ?>
            <!-- .col-->
        </div>

        <!-- .row-->
        <div class="b-seo-workpaths row">
            <?php if (have_rows('seo_list_ya_reap')):
                ?>
                <?php while (have_rows('seo_list_ya_reap')):
                the_row();
                ?>
                <div class="col col--md-6">
                    <div class="b-seo-workpath" style="background-image:url(<?php the_sub_field('seo_list_item_img_border') ?>);">
                        <div class="b-seo-workpath__img"
                             style="background-image:url(<?php the_sub_field('seo_list_item_img') ?>);"></div>
                        <?php if (get_sub_field('seo_list_item')): ?>
                        <div class="b-seo-workpath__title"><?php the_sub_field('seo_list_item') ?></div>
                        <?php endif; ?>
                        <?php if (have_rows('seo_list_item_list')):
                        ?>
                        <ul class="b-seo-workpath__list">

                                <?php while (have_rows('seo_list_item_list')):
                                the_row();
                                ?>
                                <li><?php the_sub_field('seo_list_item_list_text') ?></li>
                            <?php endwhile; ?>
                                                </ul>
                        <?php endif; ?>
                    </div>

                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>

</div>
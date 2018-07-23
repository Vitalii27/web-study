<div class="s-params">
    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <div class="b-params">
                <?php if (get_field('teach_features_title')): ?>
                    <div class="b-params__title e-title"><?php the_field('teach_features_title') ?></div>
                <?php endif; ?>
                <div class="row">
                    <?php if (have_rows('teach_features_reap')): ?>
                        <?php while (have_rows('teach_features_reap')): the_row(); ?>
                            <div class="col col--md-6">
                                <div class="b-params-item">
                                    <div class="b-params-item__img"
                                         style="background-image:url(<?php the_sub_field('teach_features_reap_image') ?>);"></div>
                                    <?php if (get_sub_field('teach_features_reap_title')): ?>
                                        <div class="b-params-item__body">

                                            <div class="b-params-item__title"><?php the_sub_field('teach_features_reap_title') ?></div>
                                            <?php if (have_rows('teach_features_reap_list')): ?>

                                                <ul class="b-params-item__list">
                                                    <?php while (have_rows('teach_features_reap_list')): the_row(); ?>
                                                        <?php if (get_sub_field('teach_features_reap_text_list')): ?>
                                                            <li><?php the_sub_field('teach_features_reap_text_list') ?></li>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- .b-params-item-->
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- .col-->

                </div>
                <!-- .row-->
            </div>
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</div>
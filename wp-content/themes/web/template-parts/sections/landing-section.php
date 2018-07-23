<div class="s-target">
    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <div class="b-target">
                <?php if (get_field('content_title-page')): ?>
                    <div class="b-target__title e-title e-title--second"><?php the_field('content_title-page') ?></div>
                <?php endif; ?>
                <div class="b-target__body">
                    <div class="row">
                        <?php if (have_rows('content_title-page-reap')): ?>
                            <?php while (have_rows('content_title-page-reap')):
                                the_row();
                                ?>
                                <div class="col col--lg-3 col--sm-6">
                                    <div class="b-target-item">
                                        <div class="b-target-item__circle"
                                             style="background-image:url(<?php the_sub_field('content_title-page-icon') ?>);"></div>
                                        <?php if (get_sub_field('content_title-page-text')): ?>
                                        <div class="b-target-item__title"><?php the_sub_field('content_title-page-text') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- .b-target-item-->
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- .col-->
                </div>
                <!-- .row-->
            </div>
            <!-- .b-target__body-->
        </div>
        <!-- .b-target-->
    </div>
    <!-- .col-->
</div>
<div class="section project-page">
    <?php if (get_field('project-banner')): ?>
        <div class="project-banner">
            <img src="<?php the_field('project-banner') ?>" alt="img">
        </div>
    <?php endif; ?>

    <?php if (get_field('project-title')): ?>
        <div class="project-block">
            <div class="project-page_container">
                <div class="project-block_title"><?php the_field('project-title') ?></div>
                <?php if (get_field('project-link')): ?>
                    <a href="<?php the_field('project-link') ?>"
                       class="project-block_link"><?php the_field('project-link') ?></a>
                <?php endif; ?>
                <?php the_field('project-desc') ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (get_field('result-num-count')): ?>
    <div class="project-block project-block--white">
        <div class="project-page_container">
            <div class="project-block_title"><?php the_field('project-title-result') ?></div>
            <div class="project-page-new_list">
                <div class="project-page-new_left project-page-new_item">
                    <h4 class="project-page_item-title">До обращения</h4>
                    <div class="project-page_item-content">
                        <div class="project-page_item-content_left">
                            <?php if (get_field('result-num-count')): ?>
                                <div class="project-page_item-num"><?php the_field('result-num-count') ?></div>
                            <?php endif; ?>
                            <?php if (get_field('result-num-desc-site')): ?>
                                <div class="project-page_item-desc">
                                    <?php the_field('result-num-desc-site') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="project-page_item-content_right">
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profits.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>Конверсия</p>
                                <div>  <?php the_field('conver_before') ?></div>
                            </div>
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/website.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>Глубина просмотров</p>
                                <div>  <?php the_field('conver_deep') ?></div>
                            </div>
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/timer.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>Время на сайте</p>
                                <div>  <?php the_field('time-before') ?></div>
                            </div>
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/like.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>% Отказов</p>
                                <div>  <?php the_field('procent-before') ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-page-new_right project-page-new_item">
                    <h4 class="project-page_item-title">После обращения</h4>
                    <div class="project-page_item-content">
                        <div class="project-page_item-content_left">
                            <?php if (get_field('result-num-count-before')): ?>
                                <div class="project-page_item-num"><?php the_field('result-num-count-before') ?><i class="fa fa-long-arrow-up" aria-hidden="true"></i></div>
                            <?php endif; ?>
                            <?php if (get_field('result-num-desc-site-before')): ?>
                                <div class="project-page_item-desc"><?php the_field('result-num-desc-site-before') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="project-page_item-content_right">
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/profits.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>Конверсия</p>
                                <div>  <?php the_field('conver_after') ?></div>
                            </div>
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/website.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>Глубина просмотров</p>
                                <div>  <?php the_field('conver_deep-before') ?></div>
                            </div>
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/timer.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>Время на сайте</p>
                                <div>  <?php the_field('time-after') ?></div>
                            </div>
                            <div class="project-page_item-content_right-block">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/like.png"
                                     alt="img" class="project-page_item-content_right-icon">
                                <p>% Отказов</p>
                                <div>  <?php the_field('procent-after') ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_template_part('./template-parts/sections/seo-block'); ?>
<?php if (get_field('project-task-title')): ?>
    <div class="project-block">
        <div class="project-page_container">
            <div class="project-block_title"><?php the_field('project-task-title') ?></div>
            <br>
            <?php the_field('project-task-desc') ?>
        </div>
    </div>
<?php endif; ?>
<?php if (get_field('project-task-title-study')): ?>
    <div class="project-block project-block--white">
        <div class="project-page_container">
            <div class="project-block_title"><?php the_field('project-task-title-study') ?></div>
            <?php if (have_rows('project-task-title-study_list')):
                ?>
                <div class="project-block_list-study">
                    <?php while (have_rows('project-task-title-study_list')):
                        the_row();
                        ?>
                        <?php if (get_sub_field('project-task-title-study_img')): ?>
                        <div class="project-block_item-study">
                            <img src="<?php the_sub_field('project-task-title-study_img') ?>" alt="img">
                        </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <br>
            <?php endif; ?>
            <?php the_field('project-task-title-study-desc') ?>
        </div>

    </div>
<?php endif; ?>
<?php if (get_field('project-task-title-design')): ?>
    <div class="project-block project-block--white">
        <div class="project-page_container">
            <div class="project-block_title"><?php the_field('project-task-title-design') ?></div>
            <div class="project-block_design">
                <?php if (get_field('project-task-title-design-img')): ?>
                    <img src="<?php the_field('project-task-title-design-img') ?>" alt="img">
                <?php endif; ?>
                <!--                    --><?php //if (have_rows('project-task-title-design-img-other')):
                //                        ?>
                <!--                        <div class="project-block_design-block">-->
                <!--                            --><?php //while (have_rows('project-task-title-design-img-other')):
                //                                the_row();
                //                                ?>
                <!--                            <span class="project-block_design-wrapp">-->
                <!--                                <img src="-->
                <?php //the_sub_field('project-task-title-design-image') ?><!--" alt="img">-->
                <!--                            </span>-->
                <!---->
                <!--                            --><?php //endwhile; ?>
                <!--                        </div>-->
                <!--                    --><?php //endif; ?>
            </div>
        </div>

    </div>
<?php endif; ?>
</div>
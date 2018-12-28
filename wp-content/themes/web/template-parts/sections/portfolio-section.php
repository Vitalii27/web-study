<div class="s-content">
    <?php if (have_rows('portfolio_page_main_reap')):
        ?>

        <div class="s-works row">
            <div class="col col--xxl-10 col--xxl-offset-2 col--xl-10 col--xl-offset-1">

                <div class="s-works__body row">

                    <?php while (have_rows('portfolio_page_main_reap')):
                        the_row();
                        ?>
                        <div class="s-works__col col col--md-4">
                            <?php if (get_sub_field('portfolio_page_main_img')): ?>
                                <a class="b-portfolio" href="<?php the_sub_field('portfolio_page_main_link') ?>">
                                    <div class="portfolio-img"
                                         style="background-image:url(<?php the_sub_field('portfolio_page_main_img') ?>);"></div>
                                    <div class="b-portfolio__body">
                                        <?php if (get_sub_field('portfolio_page_main_name')): ?>
                                            <div class="b-portfolio__title"><?php the_sub_field('portfolio_page_main_name') ?></div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('portfolio_page_main_desc')): ?>
                                            <div class="b-portfolio__desc"><?php the_sub_field('portfolio_page_main_desc') ?></div>
                                        <?php endif; ?>

                                    </div>
                                </a>
                            <?php endif; ?>
                            <!-- .b-portfolio-->
                        </div>
                    <?php endwhile; ?>

                    <!-- .s-works__col-->
                </div>
                <!-- .s-works__body-->
            </div>
            <!-- .col-->
        </div>
        <!-- .s-works-->
        <svg class="icon icon-round-circle s-content__icon">
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#round-circle"></use>
        </svg>
    <?php endif; ?>
</div>
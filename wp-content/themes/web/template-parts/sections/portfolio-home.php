<div class="portfolio">
    <?php if (get_field('portfolio_home')): ?>
        <div class="e-title e-title--color text--xs-center"><?php the_field('portfolio_home') ?></div>
    <?php endif; ?>
    <div class="portfolio_container js-portfolio-slider">
        <?php if (have_rows('portfolio_home_works')): $count = 0; ?>
            <?php while (have_rows('portfolio_home_works')):
                the_row();
                ?>
                <div class="portfolio_elem">
                    <a href="<?php the_sub_field('link_on_the_project') ?>" class="flip-container">
                        <div class="flipper">
                            <?php if (get_sub_field('image_project_portf')): ?>
                                <div class="front"><span class="img_art"><img src="<?php the_sub_field('image_project_portf') ?>"
                                                alt="<?php the_sub_field('name_project_porft') ?>"></span></div>
                            <?php endif; ?>
                            <div class="back">
                                <?php if (get_sub_field('name_project_porft')): ?>
                                    <div class="info"><span
                                                class="title"><?php the_sub_field('name_project_porft') ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <?php if (get_field('text_button_portf')): ?>
        <a class="b-result__link" href="<?php the_field('link_button_portf') ?>">
            <div class="inner"><?php the_field('text_button_portf') ?></div>
        </a>
    <?php endif; ?>
</div>
<div class="b-side">
    <div class="b-logo"><a href="index.html"><?php the_custom_logo(); ?></a>
    </div>
    <div class="b-services">
        <?php if (have_rows('left_nav')): ?>

            <?php while (have_rows('left_nav')): the_row(); ?>
                <a class="b-services__item" href="<?php the_sub_field('link_to_page') ?>">
                    <img class="icon icon-globe" src="<?php the_sub_field('image_left_sd') ?>" alt="logo">
                    <?php the_sub_field('name_left_sd') ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
<!--        <svg class="icon icon-globe">-->
<!--            <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#globe"></use>-->
<!--        </svg>-->
<!--                <a class="b-services__item" href="seo.html">-->
<!--                    <svg class="icon icon-targeting">-->
<!--                        <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#targeting"></use>-->
<!--                    </svg>-->
<!--                    Продвижение сайтов</a>-->
<!--                <a class="b-services__item" href="#">-->
<!--                    <svg class="icon icon-puzzle">-->
<!--                        <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#puzzle"></use>-->
<!--                    </svg>-->
<!--                    Фирменный стиль</a>-->
<!--                <a class="b-services__item" href="#">-->
<!--                    <svg class="icon icon-crm">-->
<!--                        <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#crm"></use>-->
<!--                    </svg>-->
<!--                    CRM</a></div>-->
    </div>
</div>
<div class="s-advantages" style="background-image:url(<?php the_field('advantages_bg2') ?>);">
    <?php if (get_field('advantages_title')): ?>
        <div class="e-title text--xs-center"><?php the_field('advantages_title') ?></div>
    <?php endif; ?>
    <div class="b-advantage">
        <?php if (get_field('advantages_subtitle2')): ?>
        <div class="b-advantage-circle" ><?php the_field('advantages_subtitle2') ?>
        <div class="b-advantage-line"><span class="dot start"></span><span class="dot finish"></span><span
                    class="point one"></span><span class="point two"></span><span
                    class="point three"></span><span class="point four"></span></div>
        <!-- .b-advantage-line-->

        </div>
        <?php endif; ?>
        <!-- .b-advantage-circle-->
        <?php if (have_rows('advantages_reap')): $count = 0; ?>
            <?php while (have_rows('advantages_reap')):
                the_row();
                ?>
                <div class="b-advantage-item b-advantage-item--<?php echo $count; ?>">
                    <!--            <svg class="icon icon-techsupport">-->
                    <!--                <use xlink:href="assets/img/sprite.svg#techsupport"></use>-->
                    <!--            </svg>-->
                    <?php if (get_sub_field('advantages_icon2')): ?>
                        <img src="<?php the_sub_field('advantages_icon2') ?>" class="icon icon--<?php echo $count; ?>"
                             alt="img">
                    <?php endif; ?>
                    <?php if (get_sub_field('advantages_title_block')): ?>
                        <div class="b-advantage-item__title"><?php the_sub_field('advantages_title_block') ?></div>
                    <?php endif; ?>
                    <?php the_sub_field('advantages_desc') ?>
                </div>
                <?php $count++; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- .b-advantage-->
</div>
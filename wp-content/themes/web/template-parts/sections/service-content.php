<div class="wrapper">


    <div class="s-services">
        <?php if (have_rows('services-section-page-reap')): ?>
        <?php while (have_rows('services-section-page-reap')):
        the_row();
        ?>
        <div class="s-services__part">

                    <div class="row">
                        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                            <?php if (get_sub_field('services-icon-page')): ?>
                                <div class="s-services__icon">
                                    <img src="<?php the_sub_field('services-icon-page') ?>" alt="icon" class="icon">

                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('services-page-title')): ?>
                                <div class="s-services__title"><?php the_sub_field('services-page-title') ?></div>
                            <?php endif; ?>
                            <div class="s-services__body">
                                <div class="row row--xs-justify-center">
                                    <?php if (have_rows('services-list-page')): ?>
                                        <?php while (have_rows('services-list-page')):
                                            the_row();
                                            ?>
                                            <div class="col col--lg-4 col--md-6">
                                                <div class="b-service"><a class="b-service__link" href="<?php the_sub_field('services-list-link-page') ?>">
                                                        <div class="b-service__img"
                                                             style="background-image:url(<?php the_sub_field('services-page-bg') ?>);"></div>
                                                        <div class="b-service__body">
                                                            <div class="b-service__title"><?php the_sub_field('services-page-title-elem') ?></div>
                                                        </div>
                                                    </a></div>
                                                <!-- .b-service-->
                                            </div>
                                            <!-- .col-->

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <!-- .col-->
                                </div>
                                <!-- .row-->
                            </div>
                            <!-- .s-services__body-->
                        </div>
                        <!-- .col-->
                    </div>
                    <!-- .row-->

        </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>
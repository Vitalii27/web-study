<?php if (have_rows('home_partners')): ?>
    <div class="s-clients partners">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <div class="b-clients">


                    <div class="b-slider-clients">
                        <?php while (have_rows('home_partners')): the_row(); ?>
                            <?php if (get_sub_field('home_partners_img')): ?>
                                <div class="b-clients__item"><img src="<?php the_sub_field('home_partners_img') ?>"
                                                                  alt="client">

                                </div>
                            <?php endif; ?>

                        <?php endwhile; ?>

                    </div>
                    <!-- .b-slider-clients-->
                </div>
                <!-- .b-clients-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
<?php endif; ?>
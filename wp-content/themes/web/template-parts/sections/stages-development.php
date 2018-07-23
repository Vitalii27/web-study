<div class="s-workpath">
    <div class="row">
        <div class="col col--xl-10 col--xl-offset-1">
            <?php if (get_field('home_four_title')): ?>
                <div class="e-title text--xs-center"> <?php the_field('home_four_title') ?></div>
            <?php endif; ?>
            <div class="b-workpaths">
                <div class="b-workpaths__circle"
                     style="background-image:url(<?php the_field('home_four_bg') ?>);"></div>
                <div class="b-workpaths__row one row">
                    <div class="col col--sm-6">
                        <div class="b-workpath one left">
                            <?php if (get_field('home_four_first_img')): ?>
                                <div class="b-workpath__icon">
                                    <img class="icon icon-click" src="<?php the_field('home_four_first_img') ?>"
                                         alt="img">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_four_first_title')): ?>
                                <div class="b-workpath__body">
                                    <div class="b-workpath__title"><?php the_field('home_four_first_title') ?></div>
                                    <?php the_field('home_four_first_description') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- .b-workpath-->
                    </div>
                    <!-- .col-->
                    <div class="col col--sm-6">
                        <div class="b-workpath two right">
                            <?php if (get_field('home_four_second_img')): ?>
                                <div class="b-workpath__icon">
                                    <img class="icon icon-click" src="<?php the_field('home_four_second_img') ?>"
                                         alt="img">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_four_second_title')): ?>
                                <div class="b-workpath__body">
                                    <div class="b-workpath__title"><?php the_field('home_four_second_title') ?></div>
                                    <?php the_field('home_four_second_description') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- .b-workpath-->
                    </div>
                    <!-- .col-->
                </div>
                <!-- .b-workpath__row-->
                <div class="b-workpaths__row two row">
                    <div class="col col--sm-6">
                        <div class="b-workpath three left">
                            <?php if (get_field('home_four_third_img')): ?>
                                <div class="b-workpath__icon">
                                    <img class="icon icon-click" src="<?php the_field('home_four_third_img') ?>"
                                         alt="img">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_four_third_title')): ?>
                                <div class="b-workpath__body">
                                    <div class="b-workpath__title"><?php the_field('home_four_third_title') ?></div>
                                    <?php the_field('home_four_third_description') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- .b-workpath-->
                    </div>
                    <div class="col col--sm-6">
                        <div class="b-workpath four right">
                            <?php if (get_field('home_four_fourth_img')): ?>
                                <div class="b-workpath__icon">
                                    <img class="icon icon-click" src="<?php the_field('home_four_fourth_img') ?>"
                                         alt="img">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_four_fourth_title')): ?>
                                <div class="b-workpath__body">
                                    <div class="b-workpath__title"><?php the_field('home_four_fourth_title') ?></div>
                                    <?php the_field('home_four_fourth_description') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- .b-workpath-->
                    </div>
                </div>
                <!-- .b-workpaths__row.row-->
                <div class="b-workpaths__row three row">
                    <div class="col col--sm-6">
                        <div class="b-workpath five left">
                            <?php if (get_field('home_four_fifth_img')): ?>
                                <div class="b-workpath__icon">
                                    <img class="icon icon-click" src="<?php the_field('home_four_fifth_img') ?>"
                                         alt="img">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_four_fifth_title')): ?>
                                <div class="b-workpath__body">
                                    <div class="b-workpath__title"><?php the_field('home_four_fifth_title') ?></div>
                                    <?php the_field('home_four_fifth_description') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- .b-workpath-->
                    </div>
                    <div class="col col--sm-6">
                        <div class="b-workpath six right">
                            <?php if (get_field('home_four_sixth_img')): ?>
                                <div class="b-workpath__icon">
                                    <img class="icon icon-click" src="<?php the_field('home_four_sixth_img') ?>"
                                         alt="img">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('home_four_sixth_title')): ?>
                                <div class="b-workpath__body">
                                    <div class="b-workpath__title"><?php the_field('home_four_sixth_title') ?></div>
                                    <?php the_field('home_four_sixth_dexcription') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- .b-workpath-->
                    </div>
                </div>
                <!-- .b-workpaths__row.row-->
            </div>

        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</div>
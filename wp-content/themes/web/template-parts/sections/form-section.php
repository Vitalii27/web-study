<section class="s-promo">
    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <div class="b-promo">
                <div class="b-promo__img" style="background-image:url(<?php the_field('section_form') ?>);"></div>
                <div class="b-promo__inner">
                    <div class="row">
                        <div class="col--lg-7 col--md-9">
                            <?php if (get_field('section_form_title')): ?>
                                <div class="b-promo__title"><?php the_field('section_form_title') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('section_form_desc')): ?>
                            <div class="b-promo__text">
                                <?php the_field('section_form_desc') ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if (get_field('shortcode_form')): ?>

                            <div class="contact-us_left">


                            </div>
                        <?php endif; ?>
                        <?php if (get_field('section_form_shord')): ?>

                            <div class="col--lg-5 col--md-5 col--sm-6 col--xs-12">
                                <?php echo do_shortcode(get_field('section_form_shord')); ?>
                            </div>
                        <?php endif; ?>
<!--                        <div class="col--lg-5 col--md-5 col--sm-6 col--xs-12">-->
<!--                            <form class="form-promo" data-validate action="#">-->
<!--                                <div class="form-promo__body">-->
<!--                                    <input class="form-promo__input" type="tel" name="tel"-->
<!--                                           placeholder="Введите номер телефона" required>-->
<!--                                    <button class="form-promo__btn" type="submit">-->
<!--                                        <svg class="icon icon-arrow-right-long">-->
<!--                                            <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>-->
<!--                                        </svg>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <!-- .b-promo-->
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</section>
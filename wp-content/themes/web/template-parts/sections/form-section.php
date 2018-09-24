
<section class="s-promo">
<div class="row">
    <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
        <div class="b-promo">
            <div class="b-promo__img" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/promo/2.png);"></div>
            <div class="b-promo__inner">
                <div class="row">
                    <div class="col--lg-7 col--md-9">
                        <div class="b-promo__title">Создадим стратегию Вашего<br>будущего сайта за 24 часа!</div>
                        <div class="b-promo__text">
                            <p>Продумаем все: от того на какой CMS создать Ресурс, до стоимости одного Обращения в Компанию в будущем!
                            </p>
                        </div>
                    </div>
                    <?php if (get_field('section_form_shord')): ?>

                        <div class="col--lg-5 col--md-5 col--sm-6 col--xs-12">
                            <?php echo do_shortcode(get_field('section_form_shord')); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- .b-promo-->
    </div>
    <!-- .col-->
</div>
<!-- .row-->
</section>
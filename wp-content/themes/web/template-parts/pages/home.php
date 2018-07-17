<!--include ../layout/_header-->
<div class="menu-icon" id="menu-control"><span></span><span></span><span></span></div>

<!-- .b-side-->
<div class="wrapper">
    <div class="s-hero row row--md-center">

        <!-- .s-hero__top-->
        <div class="s-hero__body">
            <div class="row">
                <div class="col col--xxl-6 col--xxl-offset-5 col--xl-6 col--xl-offset-5 col--lg-7 col--lg-offset-5 col--md-7 col--md-offset-5">
                    <div class="b-hero">
                        <?php if (get_field('home_title')): ?>
                            <h1><?php the_field('home_title') ?></h1>
                        <?php endif; ?>
                        <?php if (get_field('home_subtitle')): ?>

                            <p><?php the_field('home_subtitle') ?></p>
                        <?php endif; ?>

                        <?php if (have_rows('home_tech')): ?>
                            <ul>
                                <?php while (have_rows('home_tech')): the_row(); ?>
                                    <?php if (get_sub_field('home_tech_name')): ?>
                                        <li><?php the_sub_field('home_tech_name') ?><i>*</i></li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>

                        <?php endif; ?>
                        <?php if (get_field('home_gar')): ?>
                            <div class="b-hero__accent"><?php the_field('home_gar') ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- .col-->
            </div>
            <!-- .row-->
        </div>
        <!-- .s-hero__body-->
        <div class="s-hero__bottom">
            <svg class="icon icon-mouse">
                <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#mouse"></use>
            </svg>
            <div class="row">
                <div class="col col--xxl-2 col--xxl-offset-2 col--xl-3 col--xl-offset-1 col--lg-3 col--lg-offset-1">
                    <div class="b-hero-contacts"><a href="#">
                            <svg class="icon icon-phone">
                                <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#phone"></use>
                            </svg>
                        </a><a href="#">
                            <svg class="icon icon-location">
                                <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#location"></use>
                            </svg>
                        </a><a href="#">
                            <svg class="icon icon-calendar">
                                <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#calendar"></use>
                            </svg>
                        </a></div>
                    <!-- .b-hero-contacts-->
                </div>
                <!-- .col-->
            </div>
            <!-- .row-->
        </div>
        <!-- .s-hero__bottom-->
    </div>
    <!-- .S-HERO-->
    <div class="section section--colored">
        <div class="s-promo s-promo--thin">
            <div class="row">
                <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                    <div class="b-promo b-promo--prime">
                        <?php if (get_field('home_two_bg')): ?>
                            <div class="b-promo__img"
                                 style="background-image:url(<?php the_field('home_two_bg') ?>);"></div>
                        <?php endif; ?>
                        <div class="b-promo__inner">
                            <div class="row">
                                <div class="col col--xxl-9 col--xl-10">

                                    <?php if (get_field('home_two_title')): ?>
                                        <div class="b-promo__title"><?php the_field('home_two_title') ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (get_field('home_two_desc')): ?>
                                        <div class="b-promo__text">
                                            <?php the_field('home_two_desc') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .b-promo-->
                </div>
                <!-- .col-->
            </div>
            <!-- .row-->
        </div>
        <!-- .S-PROMO-->
        <div class="s-compare">
            <div class="row">
                <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                    <?php if (get_field('home_two_srav')): ?>
                        <div class="e-title e-title--color text--xs-center"> <?php the_field('home_two_srav') ?></div>
                    <?php endif; ?>
                    <div class="b-compares row">
                        <?php if (have_rows('home_advn_reap')): ?>
                            <?php while (have_rows('home_advn_reap')): the_row(); ?>

                                <div class="col col--md-6 col--sm-flex">
                                    <div class="b-compare">
                                        <?php if (get_sub_field('home_advn_img')): ?>
                                            <div class="b-compare__title"
                                                 style="background-image:url( <?php the_sub_field('home_advn_img') ?>);">
                                                <?php the_sub_field('home_section_titl') ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="b-compare__body">
                                            <div class="b-compare__circle">
                                                <svg class="icon icon-big-diamond">
                                                    <use xlink:href="wp-content/themes/web/assets/images/sprite.svg#diamond"></use>
                                                </svg>
                                            </div>
                                            <?php if (get_sub_field('home_advantages_title')): ?>
                                                <div class="b-compare__part positive"><?php the_sub_field('home_advantages_title') ?></div>
                                            <?php endif; ?>
                                            <?php if (have_rows('home_advantages')): ?>
                                                <?php while (have_rows('home_advantages')): the_row(); ?>

                                                    <div class="b-compare-item plus">
                                                        <?php if (get_sub_field('home_advn_title')): ?>
                                                            <div class="b-compare-item__title"><?php the_sub_field('home_advn_title') ?></div>
                                                        <?php endif; ?>
                                                        <ul class="b-compare-item__list">
                                                            <?php if (have_rows('home_advn_description')): ?>
                                                                <?php while (have_rows('home_advn_description')): the_row(); ?>

                                                                    <li><?php the_sub_field('home_advn_description_text') ?></li>

                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                            <!-- .b-compare-item-->
                                            <?php if (get_sub_field('home_advn_min')): ?>
                                                <div class="b-compare__part negative"><?php the_sub_field('home_advn_min') ?></div>
                                            <?php endif; ?>
                                            <?php if (have_rows('home_advn_description_min')): ?>
                                                <?php while (have_rows('home_advn_description_min')): the_row(); ?>

                                                    <div class="b-compare-item minus">
                                                        <div class="b-compare-item__title"><?php the_sub_field('home_advn_description_min_title') ?>
                                                        </div>
                                                        <ul class="b-compare-item__list">
                                                            <?php if (have_rows('home_advn_description_min_no-advantages')): ?>
                                                                <?php while (have_rows('home_advn_description_min_no-advantages')): the_row(); ?>

                                                                    <li><?php the_sub_field('home_advn_description_text_min') ?></li>

                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- .b-compare__body-->
                                    </div>
                                    <!-- .b-compare-->
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- .col-->

                        <!-- .col-->
                    </div>
                    <!-- .b-compares-->
                </div>
                <!-- .col-->
            </div>
            <!-- .row-->
        </div>
        <!-- .S-COMPARE-->
    </div>
    <!-- .section-->
    <div class="s-makepath" style="background-image:url(<?php the_field('home_third_bg') ?>);">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <?php if (get_field('home_third')): ?>
                    <div class="e-title e-title--light text--xs-center"><?php the_field('home_third') ?>
                    </div>
                <?php endif; ?>
                <?php if (get_field('home_third_sub')): ?>
                    <div class="s-makepath__subtitle"><?php the_field('home_third_sub') ?></div>
                <?php endif; ?>
            </div>
            <!-- .col-->
            <div class="col col--xl-10 col--xl-offset-1">
                <div class="b-makepaths">
                    <div class="b-makepath one">
                        <?php if (get_field('home_third_sub_left')): ?>
                            <div class="b-makepath__inner">
                                <svg class="icon icon-big-megafon">
                                    <use xlink:href="assets/img/sprite.svg#megafon"></use>
                                </svg>
                                <?php the_field('home_third_sub_left') ?>
                            </div>
                            <div class="b-makepath__path"></div>
                        <?php endif; ?>
                    </div>
                    <div class="b-makepath two">
                        <?php if (get_field('home_third_sub_center')): ?>
                            <div class="b-makepath__inner">
                                <svg class="icon icon-big-diagram">
                                    <use xlink:href="assets/img/sprite.svg#diagram"></use>
                                </svg>
                                <?php the_field('home_third_sub_center') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="b-makepath three">
                        <div class="b-makepath__path"></div>
                        <?php if (get_field('home_third_sub_right')): ?>
                            <div class="b-makepath__inner">
                                <svg class="icon icon-big-uplevel">
                                    <use xlink:href="assets/img/sprite.svg#uplevel"></use>
                                </svg>
                                <?php the_field('home_third_sub_right') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .S-MAKEPATH-->
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
    <!-- .S-WORKPATH-->
    <div class="s-portfolio">
        <div class="row">
            <div class="col col--md-7">
                <div class="s-portfolio__left">
                    <div class="row">
                        <div class="col col--xxl-8 col--xxl-offset-4 col--xl-10 col--xl-offset-2">
                            <div class="e-title">Реализованные проекты</div>
                            <div class="portf-gallery">
                                <div class="portf-gallery__body"><a class="image"
                                                                    style="background-image:url(assets/img/portfolio/1.jpg);"
                                                                    href="assets/img/portfolio/1.jpg"
                                                                    data-caption="1/4"></a><a class="image"
                                                                                              style="background-image:url(assets/img/portfolio/2.jpg);"
                                                                                              href="assets/img/portfolio/2.jpg"
                                                                                              data-caption="2/4"></a><a
                                            class="image" style="background-image:url(assets/img/portfolio/3.jpg);"
                                            href="assets/img/portfolio/3.jpg" data-caption="3/4"></a><a class="image"
                                                                                                        style="background-image:url(assets/img/portfolio/4.jpg);"
                                                                                                        href="assets/img/portfolio/4.jpg"
                                                                                                        data-caption="4/4"></a>
                                </div>
                                <!-- .portf-gallery__body-->
                                <div class="portf-gallery__slider">
                                    <div class="portf-gallery-slider" id="portf-gallery-slider">
                                        <div class="portf-gallery-controls controls">
                                            <button class="portf-gallery-controls__item prev">
                                                <svg class="icon icon-arrow-right-long">
                                                    <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                                                </svg>
                                            </button>
                                            <button class="portf-gallery-controls__item next">
                                                <svg class="icon icon-arrow-right-long">
                                                    <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- .portf-gallery-controls-->
                                        <div class="inner">
                                            <div class="portf-gallery-slider__item">
                                                <div class="image"
                                                     style="background-image:url(assets/img/portfolio/1.jpg);"
                                                     data-index="0"></div>
                                            </div>
                                            <div class="portf-gallery-slider__item">
                                                <div class="image"
                                                     style="background-image:url(assets/img/portfolio/2.jpg);"
                                                     data-img="assets/img/portfolio/2.jpg" data-index="1"></div>
                                            </div>
                                            <div class="portf-gallery-slider__item">
                                                <div class="image"
                                                     style="background-image:url(assets/img/portfolio/3.jpg);"
                                                     data-img="assets/img/portfolio/3.jpg" data-index="2"></div>
                                            </div>
                                            <div class="portf-gallery-slider__item">
                                                <div class="image"
                                                     style="background-image:url(assets/img/portfolio/4.jpg);"
                                                     data-img="assets/img/portfolio/4.jpg" data-index="3"></div>
                                            </div>
                                        </div>
                                        <!-- .inner-->
                                    </div>
                                    <!-- .portf-gallery-slider-->
                                </div>
                                <!-- .portf-gallery__slider-->
                            </div>
                            <!-- .portf-gallery-->
                        </div>
                        <!-- .col-->
                    </div>
                    <!-- .row-->
                </div>
                <!-- .s-portfolio__left-->
            </div>
            <!-- .col-->
            <div class="col col--md-5">
                <div class="s-portfolio__right">
                    <div class="row">
                        <div class="col col--xxl-8 col--xl-10">
                            <div id="js-portf-tabs">
                                <div class="portf-tabs-desc active">
                                    <div class="text--xs-center">
                                        <ul class="portf-tabs">
                                            <li class="portf-tabs__item" data-tab-control="1">Результаты проекта</li>
                                            <li class="portf-tabs__item" data-tab-control="2">Описание проекта</li>
                                        </ul>
                                        <!-- .portf-tabs-->
                                    </div>
                                    <!-- .text--center-->
                                    <div class="portf-tab" data-tab="1">
                                        <div class="portf-tab__title">Типография «Первый том»</div>
                                        <div class="portf-tab__text portf-tab__text--result b-text">
                                            <p><strong>Задачи:</strong></p>
                                            <ul>
                                                <li>Разработать продающий сайт книжной типографии.</li>
                                                <li>Вывести его в топ Яндекса без ссылок за 1.5 месяца</li>
                                            </ul>
                                            <p><strong>Что было сделано:</strong></p>
                                            <ul>
                                                <li>Анализ ниши и спроса</li>
                                                <li>Анализ целевой аудитории: мужчины (63%) и женщины (37%)</li>
                                                <li>Формулировка предложения с учетом потребностей ЦА</li>
                                                <li>Отстройка от конкурентов</li>
                                                <li>Проектирование архитектуры сайта с определением ступени</li>
                                            </ul>
                                            <p><strong>Результаты:</strong></p>
                                            <ul>
                                                <li>Посещаемость сайта по целевым запросам из поисковых систем – 600
                                                    человек в месяц
                                                </li>
                                                <li>Суммарное количество звонков и заявок в день на расчет тиражей – 5 -
                                                    8 шт.
                                                </li>
                                                <li>Средний чек – 45 тыс. рублей</li>
                                            </ul>
                                        </div>
                                        <!-- portf-tab__text-->
                                    </div>
                                    <!-- .portf-tab-->
                                    <div class="portf-tab" data-tab="2">
                                        <div class="portf-tab__title">Типография «Первый том»</div>
                                        <div class="portf-tab__text b-text">
                                            <p>Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот,
                                                несмотря на название, не имеет никакого отношения к обитателям водоемов.
                                                Используется он веб-дизайнерами для вставки на интернет-страницы и
                                                демонстрации внешнего вида контента, просмотра шрифтов, абзацев,
                                                отступов и т.д. Так как цель применения такого текста исключительно
                                                демонстрационная, то и смысловую нагрузку ему нести совсем
                                                необязательно. Более того, нечитабельность текста сыграет на руку при
                                                оценке качества восприятия макета.</p>
                                        </div>
                                        <!-- portf-tab__text-->
                                    </div>
                                    <!-- .portf-tab-->
                                </div>
                                <!-- .portf-tabs-desc-->
                                <div class="portf-tabs-desc">
                                    <div class="text--xs-center">
                                        <ul class="portf-tabs">
                                            <li class="portf-tabs__item active" data-tab-control="3">Результаты
                                                проекта
                                            </li>
                                            <li class="portf-tabs__item" data-tab-control="4">Описание проекта</li>
                                        </ul>
                                        <!-- .portf-tabs-->
                                    </div>
                                    <!-- .text--center-->
                                    <div class="portf-tab active" data-tab="3">
                                        <div class="portf-tab__title">Типография «Первый том» 2</div>
                                        <div class="portf-tab__text portf-tab__text--result b-text">
                                            <p><strong>Задачи:</strong></p>
                                            <ul>
                                                <li>Разработать продающий сайт книжной типографии.</li>
                                                <li>Вывести его в топ Яндекса без ссылок за 1.5 месяца</li>
                                            </ul>
                                            <p><strong>Что было сделано:</strong></p>
                                            <ul>
                                                <li>Анализ ниши и спроса</li>
                                                <li>Анализ целевой аудитории: мужчины (63%) и женщины (37%)</li>
                                                <li>Формулировка предложения с учетом потребностей ЦА</li>
                                                <li>Отстройка от конкурентов</li>
                                                <li>Проектирование архитектуры сайта с определением ступени</li>
                                            </ul>
                                            <p><strong>Результаты:</strong></p>
                                            <ul>
                                                <li>Посещаемость сайта по целевым запросам из поисковых систем – 600
                                                    человек в месяц
                                                </li>
                                                <li>Суммарное количество звонков и заявок в день на расчет тиражей – 5 -
                                                    8 шт.
                                                </li>
                                                <li>Средний чек – 45 тыс. рублей</li>
                                            </ul>
                                        </div>
                                        <!-- portf-tab__text-->
                                    </div>
                                    <!-- .portf-tab-->
                                    <div class="portf-tab" data-tab="4">
                                        <div class="portf-tab__title">Типография «Первый том»</div>
                                        <div class="portf-tab__text b-text">
                                            <p>Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот,
                                                несмотря на название, не имеет никакого отношения к обитателям водоемов.
                                                Используется он веб-дизайнерами для вставки на интернет-страницы и
                                                демонстрации внешнего вида контента, просмотра шрифтов, абзацев,
                                                отступов и т.д. Так как цель применения такого текста исключительно
                                                демонстрационная, то и смысловую нагрузку ему нести совсем
                                                необязательно. Более того, нечитабельность текста сыграет на руку при
                                                оценке качества восприятия макета.</p>
                                        </div>
                                        <!-- portf-tab__text-->
                                    </div>
                                    <!-- .portf-tab-->
                                </div>
                                <!-- .portf-tabs-desc-->
                            </div>
                            <!-- #-->
                        </div>
                        <!-- .col-->
                    </div>
                    <!-- .row-->
                </div>
                <!-- .s-portfolio__right-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
        <div class="s-portfolio__footer row row--sm-center">
            <div class="col col--xxl-5 col--xxl-offset-2 col--xl-5 col--xl-offset-1 col--md-7">
                <div class="b-promo-text">
                    <div class="b-promo-text__title">Создадим стратегию Вашего сайта</div>
                    <p>Продумаем все: от того на какой CMS создать ресурс, до стоимости одного обращения в компанию в
                        будущем.</p>
                </div>
                <!-- .b-promo-text-->
            </div>
            <!-- .col-->
            <div class="col col--xxl-4 col--xxl-offset-0 col--xl-4 col--xl-offset-1 col--md-4 col--md-offset-1"><a
                        class="btn btn--round btn--gradient" href="#">Показать больше работ</a></div>
            <!-- .col-->
        </div>
        <!-- .s-portfolio__footer-->
    </div>
    <!-- .S-PORTFOLIO-->
    <div class="s-result">
        <div class="row">
            <div class="col col--xxl-6 col--xxl-offset-3 col--xl-8 col--xl-offset-2 col--lg-8 col--lg-offset-2 col--md-8 col--md-offset-2 col--sm-10 col--sm-offset-1">
                <div class="e-title text--xs-center">Что вы получите в результате сотрудничества с нами ?</div>
            </div>
            <!-- .col-->
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <div class="b-results row">
                    <div class="col col--lg-3 col--sm-6 col--sm-flex">
                        <div class="b-result">
                            <svg class="icon icon-idea">
                                <use xlink:href="assets/img/sprite.svg#idea"></use>
                            </svg>
                            <div class="b-result__title">Продающий сайт</div>
                            <p>Продающий, удобный в использовании сайт. Вам будет поступать от 15 заявок в день!</p>
                        </div>
                        <!-- .b-result-->
                    </div>
                    <!-- .col-->
                    <div class="col col--lg-3 col--sm-6 col--sm-flex">
                        <div class="b-result">
                            <svg class="icon icon-newspaper">
                                <use xlink:href="assets/img/sprite.svg#newspaper"></use>
                            </svg>
                            <div class="b-result__title">Выгодная презентация</div>
                            <p>Благодаря уникальному дизайну сайт будет презентовать Ваш бизнес в наиболее выгодном
                                свете</p>
                        </div>
                        <!-- .b-result-->
                    </div>
                    <!-- .col-->
                    <div class="col col--lg-3 col--sm-6 col--sm-flex">
                        <div class="b-result">
                            <svg class="icon icon-stats">
                                <use xlink:href="assets/img/sprite.svg#stats"></use>
                            </svg>
                            <div class="b-result__title">Успешный бизнес</div>
                            <p>Продающий, удобный в использовании сайт.</p>
                        </div>
                        <!-- .b-result-->
                    </div>
                    <!-- .col-->
                    <div class="col col--lg-3 col--sm-6 col--sm-flex">
                        <div class="b-result">
                            <svg class="icon icon-full">
                                <use xlink:href="assets/img/sprite.svg#full"></use>
                            </svg>
                            <div class="b-result__title">Бизнес под ключ</div>
                            <p>Вы позволите себе быть успешным бизнесменом!</p><a class="b-result__link" href="#">
                                <div class="inner">Заказать бизнес</div>
                            </a>
                        </div>
                        <!-- .b-result-->
                    </div>
                    <!-- .col-->
                </div>
                <!-- .b-results-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .S-RESULT-->
    <div class="section section--colored">
        <div class="s-worktypes">
            <div class="row">
                <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                    <div class="e-title e-title--light text--xs-center">Создаем бизнес-сайты</div>
                    <div class="b-worktypes row">
                        <div class="col col--xl-3 col--sm-6 col--sm-flex">
                            <div class="b-worktype">
                                <div class="b-worktype__header">
                                    <svg class="icon icon-fly">
                                        <use xlink:href="assets/img/sprite.svg#fly"></use>
                                    </svg>
                                    <div class="b-worktype__title">Landing page</div>
                                </div>
                                <div class="b-worktype__desc"><a class="b-worktype__link" href="#">Подробнее</a>
                                    <p>Каждый веб-разработчик знает, что такое текст-«рыба».</p>
                                </div>
                            </div>
                            <!-- .b-worktype-->
                        </div>
                        <!-- .col-->
                        <div class="col col--xl-3 col--sm-6 col--sm-flex">
                            <div class="b-worktype">
                                <div class="b-worktype__header">
                                    <svg class="icon icon-corporate">
                                        <use xlink:href="assets/img/sprite.svg#corporate"></use>
                                    </svg>
                                    <div class="b-worktype__title">Корпоративный сайт</div>
                                </div>
                                <div class="b-worktype__desc"><a class="b-worktype__link" href="#">Подробнее</a>
                                    <p>Каждый веб-разработчик знает, что такое текст-«рыба».</p>
                                </div>
                            </div>
                            <!-- .b-worktype-->
                        </div>
                        <!-- .col-->
                        <div class="col col--xl-3 col--sm-6 col--sm-flex">
                            <div class="b-worktype">
                                <div class="b-worktype__header">
                                    <svg class="icon icon-visitka">
                                        <use xlink:href="assets/img/sprite.svg#visitka"></use>
                                    </svg>
                                    <div class="b-worktype__title">Сайт-визитка</div>
                                </div>
                                <div class="b-worktype__desc"><a class="b-worktype__link" href="#">Подробнее</a>
                                    <p>Каждый веб-разработчик знает, что такое текст-«рыба».</p>
                                </div>
                            </div>
                            <!-- .b-worktype-->
                        </div>
                        <!-- .col-->
                        <div class="col col--xl-3 col--sm-6 col--sm-flex">
                            <div class="b-worktype">
                                <div class="b-worktype__header">
                                    <svg class="icon icon-shop">
                                        <use xlink:href="assets/img/sprite.svg#shop"></use>
                                    </svg>
                                    <div class="b-worktype__title">Интернет-магазин</div>
                                </div>
                                <div class="b-worktype__desc"><a class="b-worktype__link" href="#">Подробнее</a>
                                    <p>Каждый веб-разработчик знает, что такое текст-«рыба».</p>
                                </div>
                            </div>
                            <!-- .b-worktype-->
                        </div>
                        <!-- .col-->
                    </div>
                </div>
                <!-- .col-->
            </div>
            <!-- .row-->
        </div>
        <!-- .S-WORKTYPES-->
        <div class="s-advantages">
            <div class="e-title text--xs-center">Преимущества нашей веб-студии</div>
            <div class="b-advantage">
                <div class="b-advantage-circle">Почему нам можно доверять?
                    <div class="b-advantage-line"><span class="dot start"></span><span class="dot finish"></span><span
                                class="point one"></span><span class="point two"></span><span
                                class="point three"></span><span class="point four"></span></div>
                    <!-- .b-advantage-line-->
                </div>
                <!-- .b-advantage-circle-->
                <div class="b-advantage-item one">
                    <svg class="icon icon-techsupport">
                        <use xlink:href="assets/img/sprite.svg#techsupport"></use>
                    </svg>
                    <div class="b-advantage-item__title">Бесплатная техподдержка</div>
                    <p>маркетинговые стратегии и фишки, которые мы применяем, Вы не найдете нигде. Это эксклюзив!</p>
                </div>
                <!-- .b-advantage-item-->
                <div class="b-advantage-item two">
                    <svg class="icon icon-garanty">
                        <use xlink:href="assets/img/sprite.svg#garanty"></use>
                    </svg>
                    <div class="b-advantage-item__title">Гарантия на сайты 1 год</div>
                    <p>маркетинговые стратегии и фишки, которые мы применяем, Вы не найдете нигде. Это эксклюзив!</p>
                </div>
                <!-- .b-advantage-item-->
                <div class="b-advantage-item three">
                    <svg class="icon icon-exclusive">
                        <use xlink:href="assets/img/sprite.svg#exclusive"></use>
                    </svg>
                    <div class="b-advantage-item__title">Не работаем на шаблонах</div>
                    <p>маркетинговые стратегии и фишки, которые мы применяем, Вы не найдете нигде. Это эксклюзив!</p>
                </div>
                <!-- .b-advantage-item-->
                <div class="b-advantage-item four">
                    <svg class="icon icon-practice">
                        <use xlink:href="assets/img/sprite.svg#practice"></use>
                    </svg>
                    <div class="b-advantage-item__title">Более 12 лет опыта</div>
                    <p>маркетинговые стратегии и фишки, которые мы применяем, Вы не найдете нигде. Это эксклюзив!</p>
                </div>
                <!-- .b-advantage-item-->
            </div>
            <!-- .b-advantage-->
        </div>
        <!-- .S-ADVANTAGES-->
    </div>
    <!-- .section-->
    <section class="s-promo">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <div class="b-promo">
                    <div class="b-promo__img" style="background-image:url(assets/img/promo/2.png);"></div>
                    <div class="b-promo__inner">
                        <div class="row">
                            <div class="col--lg-7 col--md-9">
                                <div class="b-promo__title">Создадим стратегию Вашего<br>будущего сайта за 24 часа!
                                </div>
                                <div class="b-promo__text">
                                    <p>Продумаем все: от того на какой CMS создать ресурс, до стоимости одного обращения
                                        в компанию в будущем.</p>
                                </div>
                            </div>
                            <div class="col--lg-5 col--md-5 col--sm-6 col--xs-12">
                                <form class="form-promo" data-validate action="#">
                                    <div class="form-promo__body">
                                        <input class="form-promo__input" type="tel" name="tel"
                                               placeholder="Введите номер телефона" required>
                                        <button class="form-promo__btn" type="submit">
                                            <svg class="icon icon-arrow-right-long">
                                                <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .b-promo-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </section>
    <!-- .section-->
    <div class="s-path" style="background-image:url(assets/img/bgs/bg-path.jpg);">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <div class="b-paths row">
                    <div class="col col--md-3 col--sm-6">
                        <div class="b-path">
                            <div class="b-path__title">
                                <svg class="icon icon-arrow-right-long">
                                    <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                                </svg>
                                flat-дизайн
                            </div>
                            <p><strong>Уникальный flat-дизайн</strong> с учетом Ваших требований и пожеланий, никаких
                                шаблонов</p>
                        </div>
                        <!-- .b-path-->
                    </div>
                    <!-- .col-->
                    <div class="col col--md-3 col--sm-6">
                        <div class="b-path">
                            <div class="b-path__title">
                                <svg class="icon icon-arrow-right-long">
                                    <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                                </svg>
                                Конверсия
                            </div>
                            <p><strong>Уникальный flat-дизайн</strong> с учетом Ваших требований и пожеланий, никаких
                                шаблонов</p>
                        </div>
                        <!-- .b-path-->
                    </div>
                    <!-- .col-->
                    <div class="col col--md-3 col--sm-6">
                        <div class="b-path">
                            <div class="b-path__title">
                                <svg class="icon icon-arrow-right-long">
                                    <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                                </svg>
                                Контент
                            </div>
                            <p><strong>Уникальный flat-дизайн</strong> с учетом Ваших требований и пожеланий, никаких
                                шаблонов</p>
                        </div>
                        <!-- .b-path-->
                    </div>
                    <!-- .col-->
                    <div class="col col--md-3 col--sm-6">
                        <div class="b-path">
                            <div class="b-path__title">
                                <svg class="icon icon-arrow-right-long">
                                    <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                                </svg>
                                Подход
                            </div>
                            <p><strong>Уникальный flat-дизайн</strong> с учетом Ваших требований и пожеланий, никаких
                                шаблонов</p>
                        </div>
                        <!-- .b-path-->
                    </div>
                    <!-- .col-->
                </div>
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .S-PATH-->
    <div class="s-about">
        <div class="e-title">О компании</div>
        <div class="b-about row">
            <div class="col col--xxl-4 col--xxl-offset-6 col--xl-5 col--xl-offset-6 col--lg-7 col--lg-offset-5">
                <div class="b-about__title b-text">
                    <p><strong>Alfa estate</strong> - это динамично развивающееся digital-агенстство</p>
                    <p><em>Каждый веб-разработчик знает, что такое текст-«рыба»</em>. Текст этот, несмотря на название,
                        не имеет никакого отношения к обитателям водоемов.</p>
                </div>
            </div>
            <!-- .col-->
            <div class="col col--xxl-4 col--xxl-offset-2 col--xl-5 col--xl-offset-1 col--lg-5"><img class="s-about__img"
                                                                                                    src="assets/img/img-about.jpg"
                                                                                                    alt="about"></div>
            <!-- .col-->
            <div class="col col--xxl-4 col--xl-5 col--lg-6">
                <div class="b-about__text b-text">
                    <div class="b-about__content b-about__content--columns">
                        <p>Используется он веб-дизайнерами для вставки на интернет-страницы и демонстрации внешнего вида
                            контента, просмотра шрифтов, абзацев, отступов и т.д.</p>
                        <p>Используется он веб-дизайнерами для вставки на интернет-страницы и демонстрации внешнего вида
                            контента, просмотра шрифтов, абзацев, отступов и т.д.</p>
                    </div>
                    <svg class="icon icon-arrow-down-long">
                        <use xlink:href="assets/img/sprite.svg#arrow-down-long"></use>
                    </svg>
                </div>
            </div>
            <!-- .col-->
            <div class="col col--xxl-5 col--xxl-offset-4 col--xl-6 col--xl-offset-3 col--lg-8 col--lg-offset-2">
                <div class="b-about__content b-text text--xs-center">
                    <p>Используется он <strong>веб-дизайнерами для вставки</strong> на интернет-страницы и демонстрации
                        внешнего вида контента, просмотра шрифтов, абзацев, отступов и т.д. Так как цель применения
                        такого текста исключительно демонстрационная, то и смысловую нагрузку ему нести совсем
                        необязательно.</p>
                </div>
                <div class="text--xs-center"><a class="btn btn--round btn--border-dark" href="#">Подробнее о нас</a>
                </div>
            </div>
            <!-- .col-->
        </div>
        <!-- .b-about-->
    </div>
    <!-- .S-ABOUT-->
    <div class="section s-faq">
        <div class="b-faq row" id="js-tabs-faq">
            <div class="col col--xl-4 col--md-5 col--xl-offset-2 col--md-offset-1 col--md-first col--xs-last">
                <div class="e-title s-title">Часто задаваемые вопросы</div>
                <div class="b-faq-tabs">
                    <div class="b-faq-tabs__item" data-tab="1">
                        <div class="b-text">
                            <p>Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название,
                                не имеет никакого отношения к обитателям водоемов. Используется он веб-дизайнерами для
                                вставки на интернет-страницы и демонстрации внешнего вида контента, просмотра шрифтов,
                                абзацев, отступов и т.д. Так как цель применения такого текста исключительно
                                демонстрационная, то и смысловую нагрузку ему нести совсем необязательно. Более того,
                                нечитабельность текста сыграет на руку при оценке качества восприятия макета.</p>
                        </div>
                    </div>
                    <div class="b-faq-tabs__item" data-tab="2">
                        <div class="b-text">
                            <p>Самым известным «рыбным» текстом является знаменитый Lorem ipsum. Считается, что впервые
                                его применили в книгопечатании еще в XVI веке. Своим появлением Lorem ipsum обязан
                                древнеримскому философу Цицерону, ведь именно из его трактата «О пределах добра и зла»
                                средневековый книгопечатник вырвал отдельные фразы и слова, получив текст-«рыбу», широко
                                используемый и по сей день.</p>
                        </div>
                    </div>
                    <div class="b-faq-tabs__item" data-tab="3">
                        <div class="b-text">
                            <p>И даже с языками, использующими латинский алфавит, могут возникнуть небольшие проблемы: в
                                различных языках те или иные буквы встречаются с разной частотой, имеется разница в
                                длине наиболее распространенных слов. Отсюда напрашивается вывод, что все же лучше
                                использовать в качестве «рыбы» текст на том языке, который планируется использовать при
                                запуске проекта.</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn--long btn--round btn--border" href="#">Задать вопрос</a>
            </div>
            <!-- .col-->
            <div class="col col--xl-4 col--md-5">
                <div class="b-faq-controls">
                    <div class="b-faq-controls__item" data-tab-control="1">Самым известным «рыбным» текстом является
                        знаменитый Lorem ipsum
                    </div>
                    <div class="b-faq-controls__item" data-tab-control="2">Считается, что впервые его применили в
                        книгопечатании еще в XVI веке
                    </div>
                    <div class="b-faq-controls__item" data-tab-control="3">Своим появлением Lorem ipsum обязан
                        древнеримскому философу Цицерону
                    </div>
                    <div class="b-faq-controls__item" data-tab-control="4">Средневековый книгопечатник вырвал отдельные
                        фразы и слова
                    </div>
                    <div class="b-faq-controls__item" data-tab-control="5">Написание символов на латыни и на кириллице
                        значительно различается
                    </div>
                    <div class="b-faq-controls__item" data-tab-control="6">В различных языках те или иные буквы
                        встречаются с разной частотой
                    </div>
                </div>
            </div>
            <!-- .col-->
        </div>
        <!-- .b-faq-->
    </div>
    <!-- .S-FAQ-->
    <div class="s-clients">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <div class="b-clients">
                    <div class="b-clients__controls">
                        <div class="slider-controls">
                            <button class="slider-controls__item prev">
                                <svg class="icon icon-slider-control">
                                    <use xlink:href="assets/img/sprite.svg#slider-control"></use>
                                </svg>
                            </button>
                            <button class="slider-controls__item next">
                                <svg class="icon icon-slider-control">
                                    <use xlink:href="assets/img/sprite.svg#slider-control"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="b-slider-clients" id="js-tns-clients">
                        <div class="b-clients__item"><img src="assets/img/clients/1.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/2.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/3.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/1.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/2.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/3.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/1.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/2.png" alt="client"></div>
                        <div class="b-clients__item"><img src="assets/img/clients/3.png" alt="client"></div>
                    </div>
                    <!-- .b-slider-clients-->
                </div>
                <!-- .b-clients-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .S-CLIENTS-->
    <div class="s-testimonials">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <div class="b-testimonials">
                    <div class="b-testimonials__title e-title">Благодарности клиентов</div>
                    <div class="b-slider-testimonials" id="js-tns-testimonial">
                        <div class="b-slider-testimonials__inner slider-container">
                            <div class="b-testimonial">
                                <div class="row">
                                    <div class="col col--md-8">
                                        <div class="b-testimonial__body">
                                            <div class="b-testimonial__header row row--xs-center col--md-first col--xs-last">
                                                <div class="col col--md-7 col--sm-8">
                                                    <div class="b-testimonial__name">Евгения Чиркова, Балашиха</div>
                                                </div>
                                                <div class="col col--md-5 col--sm-4"><a
                                                            class="b-testimonial__btn btn btn--wide btn--round btn--border-dark"
                                                            href="#">Ко всем отзывам</a></div>
                                            </div>
                                            <div class="b-testimonial__content">
                                                <p>Вида контента, просмотра шрифтов, абзацев, отступов и по сей день
                                                    цель. Нечитабельность текста на том языке. Зла средневековый
                                                    книгопечатник вырвал отдельные. Руку при оценке качества восприятия
                                                    макета текст на кириллический. При запуске проекта ipsum, кроме того
                                                    нечитабельность. Этот, несмотря на руку при запуске проекта алфавит.
                                                    При запуске проекта ipsum, кроме того нечитабельность. Этот,
                                                    несмотря на руку при запуске проекта алфавит. При запуске проекта
                                                    ipsum, кроме того нечитабельность. Этот, несмотря на руку при
                                                    запуске проекта алфавит.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-->
                                    <div class="col col--md-4 col--sm-flex col--md-last col--xs-first">
                                        <div class="b-testimonial__img"
                                             style="background-image:url(assets/img/testimonials/1.jpg);"></div>
                                    </div>
                                    <!-- .col-->
                                </div>
                                <!-- .row-->
                            </div>
                            <!-- .b-testimonial-->
                            <div class="b-testimonial">
                                <div class="row">
                                    <div class="col col--md-8">
                                        <div class="b-testimonial__body">
                                            <div class="b-testimonial__header row row--xs-center col--md-first col--xs-last">
                                                <div class="col col--md-7 col--sm-8">
                                                    <div class="b-testimonial__name">Евгения Чиркова, Балашиха</div>
                                                </div>
                                                <div class="col col--md-5 col--sm-4"><a
                                                            class="b-testimonial__btn btn btn--wide btn--round btn--border-dark"
                                                            href="#">Ко всем отзывам</a></div>
                                            </div>
                                            <div class="b-testimonial__content">
                                                <p>Вида контента, просмотра шрифтов, абзацев, отступов и по сей день
                                                    цель. Нечитабельность текста на том языке. Зла средневековый
                                                    книгопечатник вырвал отдельные. Руку при оценке качества восприятия
                                                    макета текст на кириллический. При запуске проекта ipsum, кроме того
                                                    нечитабельность. Этот, несмотря на руку при запуске проекта
                                                    алфавит.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-->
                                    <div class="col col--md-4 col--sm-flex col--md-last col--xs-first">
                                        <div class="b-testimonial__img"
                                             style="background-image:url(assets/img/testimonials/1.jpg);"></div>
                                    </div>
                                    <!-- .col-->
                                </div>
                                <!-- .row-->
                            </div>
                            <!-- .b-testimonial-->
                        </div>
                        <!-- .b-slider-testimonials__inner-->
                        <div class="b-slider-testimonials__controls">
                            <div class="slider-cpanel">
                                <div class="slider-controls">
                                    <button class="slider-controls__item prev">
                                        <svg class="icon icon-slider-control">
                                            <use xlink:href="assets/img/sprite.svg#slider-control"></use>
                                        </svg>
                                    </button>
                                    <button class="slider-controls__item next">
                                        <svg class="icon icon-slider-control">
                                            <use xlink:href="assets/img/sprite.svg#slider-control"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="slider-nav">
                                    <button class="slider-nav__item"></button>
                                    <button class="slider-nav__item"></button>
                                </div>
                            </div>
                        </div>
                        <!-- .b-slider-testimonials__controls-->
                    </div>
                    <!-- .b-slider-testimonials-->
                </div>
                <!-- .b-testimonials-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .S-TESTIMONIALS-->
    <div class="section s-map">
        <div class="map" id="map" data-center="55.75129399, 37.62602415" data-mark="55.75197169, 37.63033714"
             data-address="Адрес" data-zoom="16"></div>
        <div class="b-map row">
            <div class="col col--sm-10 col--sm-offset-2">
                <div class="b-map-info">
                    <div class="b-map-info__body">
                        <div class="b-map-info__title">Остались вопросы?</div>
                        <div class="b-map-info__phone">8 (800) 555-22-22</div>
                        <div class="b-map-info__action"><a href="#">Заказать обратный звонок</a></div>
                    </div>
                    <!-- .b-mfp-info__body-->
                    <div class="b-map-info__footer">
                        <div class="b-map-info-contacts">
                            <div class="b-map-info-contacts__item">Адрес: <strong>г. Москва, ул. Сущевский вал,
                                    13</strong></div>
                            <div class="b-map-info-contacts__item">E-mail: <strong><a href="mailto:">info@yandex.ru</a></strong>
                            </div>
                        </div>
                        <!-- .b-map-info-contacts-->
                    </div>
                    <!-- .b-map-info__footer-->
                </div>
                <!-- .b-map-info-->
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </div>
    <!-- .S-MAP-->
</div>
<!-- .wrapper-->
</main>
<footer class="footer">
    <div class="row row--gutters">
        <div class="col col--xl-2 col--xl-offset-2 col--lg-2 col--lg-offset-1 col--xs-6">
            <h4 class="f-title">Типы сайтов</h4>
            <ul class="f-list">
                <li><a href="#">Landing Page</a></li>
                <li><a href="#">Корпоративный сайт</a></li>
                <li><a href="#">Сайт-визитка</a></li>
                <li><a href="#">Интернет-магазин</a></li>
            </ul>
            <!-- .f-list-->
        </div>
        <!-- .col-->
        <div class="col col--xl-2 col--lg-2 col--xs-6">
            <h4 class="f-title">Услуги</h4>
            <ul class="f-list">
                <li><a href="#">Создание сайтов</a></li>
                <li><a href="#">Продвижение сайтов</a></li>
                <li><a href="#">Фирменный стиль</a></li>
                <li><a href="#">CRM</a></li>
            </ul>
            <!-- .f-list-->
        </div>
        <!-- .col-->
        <div class="col col--xl-2 col--lg-2 col--xs-6">
            <h4 class="f-title">О компании</h4>
            <ul class="f-list">
                <li><a href="#">О нас</a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Стоимость</a></li>
            </ul>
            <!-- .f-list-->
        </div>
        <!-- .col-->
        <div class="col col--xl-3 col--lg-3 col--xs-6">
            <h4 class="f-title">Контактная информация</h4>
            <div class="f-contacts">
                <div class="f-contacts__item">Телефон: <a href="tel:">8(800) 555-22-22</a></div>
                <div class="f-contacts__item">Адрес: г. Москва, ул. Сущевский вал, 13</div>
                <div class="f-contacts__item">E-mail: <a href="mailto:">info@yandex.ru</a></div>
            </div>
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
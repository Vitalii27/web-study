<div class="s-content">
    <div class="row">
        <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
            <div class="b-contacts row">
                <div class="b-contacts__item col col--md-4">
                    <?php if (get_field('contacts_page_address')): ?>
                    <div class="b-contact">
                        <div class="b-contact__title">
                            <svg class="icon icon-location">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#location"></use>
                            </svg>Адрес
                        </div>

                        <?php the_field('contacts_page_address') ?>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- .b-contacts__item-->
                <div class="b-contacts__item col col--md-4">
                    <?php if (get_field('contacts_page_tel')): ?>
                    <div class="b-contact">
                        <div class="b-contact__title">
                            <svg class="icon icon-phone">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#phone"></use>
                            </svg>Телефон
                        </div>
                        <p><a href="tel:<?php the_field('contacts_page_tel') ?>"><?php the_field('contacts_page_tel') ?></a></p>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- .b-contacts__item-->
                <div class="b-contacts__item col col--md-4">
                    <?php if (get_field('email_contacts_page')): ?>
                    <div class="b-contact">
                        <div class="b-contact__title">
                            <svg class="icon icon-mail">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#mail"></use>
                            </svg>e-mail:
                        </div>
                        <?php endif; ?>
                        <p><a href="mailto:<?php the_field('email_contacts_page') ?>"><?php the_field('email_contacts_page') ?></a></p>
                    </div>
                </div>
                <!-- .b-contacts__item-->
                <!-- .row-->
            </div>
            <!-- .b-contacts-->
        </div>
        <!-- .col-->
    </div>
    <!-- .row-->
</div>
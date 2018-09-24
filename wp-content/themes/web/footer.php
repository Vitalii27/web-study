<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web
 */

?>
<?php $footer_option = get_option('footer'); ?>
</main>
<?php if (!empty($footer_option['footer_title'])) { ?>
    <footer class="footer">
        <div class="row row--gutters">
            <div class="col col--xl-2  col--lg-2 col--lg-offset-1 col--xs-6">
                <?php if (!empty($footer_option['footer_title'])) { ?>
                    <h4 class="f-title"><?php echo $footer_option['footer_title']; ?></h4>
                <?php } ?>

                <ul class="f-list">
                    <?php if (!empty($footer_option['footer_elem'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link']; ?>"><?php echo $footer_option['footer_elem']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem2'])) { ?>

                        <li>
                            <a href="<?php echo $footer_option['footer_link2']; ?>"><?php echo $footer_option['footer_elem2']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem3'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link3']; ?>"><?php echo $footer_option['footer_elem3']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem4'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link4']; ?>"><?php echo $footer_option['footer_elem4']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem45'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link5']; ?>"><?php echo $footer_option['footer_elem']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem6'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link6']; ?>"><?php echo $footer_option['footer_elem6']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <!-- .f-list-->
            </div>
            <!-- .col-->
            <div class="col col--xl-2 col--lg-2 col--xs-6">
                <?php if (!empty($footer_option['footer_title2'])) { ?>
                    <h4 class="f-title"><?php echo $footer_option['footer_title2']; ?></h4>
                <?php } ?>
                <ul class="f-list">
                    <?php if (!empty($footer_option['footer_elem_service'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_service']; ?>"><?php echo $footer_option['footer_elem_service']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem_service2'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_service2']; ?>"><?php echo $footer_option['footer_elem_service2']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem_service3'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_service3']; ?>"><?php echo $footer_option['footer_elem_service3']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem_service4'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_service4']; ?>"><?php echo $footer_option['footer_elem_service4']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem_service5'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_service5']; ?>"><?php echo $footer_option['footer_elem_service5']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_elem_service6'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_service6']; ?>"><?php echo $footer_option['footer_elem_service6']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <!-- .f-list-->
            </div>
            <!-- .col-->
            <div class="col col--xl-2 col--lg-2 col--xs-6">
                <?php if (!empty($footer_option['footer_title3'])) { ?>
                    <h4 class="f-title"><?php echo $footer_option['footer_title3']; ?></h4>
                <?php } ?>
                <ul class="f-list">
                    <?php if (!empty($footer_option['footer_about'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_about']; ?>"><?php echo $footer_option['footer_about']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_about2'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_about2']; ?>"><?php echo $footer_option['footer_about2']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_about3'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_about3']; ?>"><?php echo $footer_option['footer_about3']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_about4'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_about4']; ?>"><?php echo $footer_option['footer_about4']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_about5'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_about5']; ?>"><?php echo $footer_option['footer_about5']; ?></a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_about4'])) { ?>
                        <li>
                            <a href="<?php echo $footer_option['footer_link_about6']; ?>"><?php echo $footer_option['footer_about6']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <!-- .f-list-->
            </div>
            <!-- .col-->
            <div class="col col--xl-3 col--lg-3 col--xs-6">
                <?php if (!empty($footer_option['footer_title_contact'])) { ?>
                    <h4 class="f-title"><?php echo $footer_option['footer_title_contact']; ?></h4>
                <?php } ?>
                <div class="f-contacts">
                    <?php if (!empty($footer_option['footer_tel'])) { ?>
                        <div class="f-contacts__item">Телефон: <a
                                    href="tel:<?php echo $footer_option['footer_tel']; ?>"><?php echo $footer_option['footer_tel']; ?></a>
                        </div>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_tel2'])) { ?>
                        <div class="f-contacts__item">Телефон: <a
                                    href="tel:<?php echo $footer_option['footer_tel2']; ?>"><?php echo $footer_option['footer_tel2']; ?></a>
                        </div>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_address'])) { ?>
                        <div class="f-contacts__item">Адрес: <?php echo $footer_option['footer_address']; ?></div>
                    <?php } ?>
                    <?php if (!empty($footer_option['footer_email1'])) { ?>
                        <div class="f-contacts__item">E-mail: <a
                                    href="mailto:<?php echo $footer_option['footer_email1']; ?>"><?php echo $footer_option['footer_email1']; ?></a>
                        </div>
                    <?php } ?>

                    <?php if (!empty($footer_option['footer_email2'])) { ?>
                        <div class="f-contacts__item">E-mail: <a
                                    href="mailto:<?php echo $footer_option['footer_email2']; ?>"><?php echo $footer_option['footer_email2']; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- .col-->
        </div>
        <!-- .row-->
    </footer>
<?php } ?>
<!-- .FOOTER-->

<!-- .modal-->
<?php get_template_part('template-parts/blocks/popup'); ?>

<?php get_template_part('template-parts/blocks/alert'); ?>
<?php wp_footer(); ?>

</body>
</html>

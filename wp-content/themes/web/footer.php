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
    </footer>
    <!-- .FOOTER-->
    <div class="hide modal">
      <div class="modal-inner"><a data-modal-close href="javascript:;">
          <svg class="icon icon-close">
            <use xlink:href="assets/img/sprite.svg#close"></use>
          </svg></a>
        <div class="modal-content"></div>
      </div>
    </div>
    <!-- .modal-->
<?php get_template_part( 'template-parts/blocks/popup'); ?>


<?php wp_footer(); ?>

</body>
</html>

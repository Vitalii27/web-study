<div class="section s-map">
    <div id="map-1" class="map"></div>
    <div class="b-map row">
        <div class="col col--sm-10 col--sm-offset-2">
            <div class="b-map-info">
                <div class="b-map-info__body">

                    <?php if (get_field('map_title')): ?>
                        <div class="b-map-info__title"><?php the_field('map_title') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('map_phone')): ?>
                        <div class="b-map-info__phone"><?php the_field('map_phone') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('map_link_text')): ?>
                        <div class="b-map-info__action"><a class="js-pop-up" href="#callback"><?php the_field('map_link_text') ?></a></div>
                    <?php endif; ?>
                </div>
                <!-- .b-mfp-info__body-->
                <div class="b-map-info__footer">
                    <div class="b-map-info-contacts">
                        <?php if (get_field('map_address')): ?>
                            <div class="b-map-info-contacts__item">Адрес:
                                <strong><?php the_field('map_address') ?></strong></div>
                        <?php endif; ?>
                        <?php if (get_field('map_address_email')): ?>
                            <div class="b-map-info-contacts__item">E-mail: <strong><a
                                            href="mailto:<?php the_field('map_address_email') ?>"><?php the_field('map_address_email') ?>
                                        </a></strong>
                            </div>
                        <?php endif; ?>
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


<script>
    var mapConfig = {
        maps: [{
            id: "map-1",
            markers: [{
                center: [<?php the_field('map_address_coord') ?>]
            }],


            mapCenter: [<?php the_field('map_address_coord') ?>],
            icon: '<?php the_field('map_marker') ?>',
            zoom: 13,

        }]

    }

</script>
<!-- .S-MAP-->
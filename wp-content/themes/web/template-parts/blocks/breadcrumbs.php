<div class="section">
    <div class="b-page-header">
        <div class="row">
            <div class="col col--xxl-8 col--xxl-offset-2 col--xl-10 col--xl-offset-1">
                <div class="b-crumbs">
                    <ul class="b-crumbs_list">
                        <?php wptuts_the_breadcrumb(); ?>
                    </ul>
                    <?php if (get_field('title_content_page_breadrumbs')): ?>
                        <div class="b-page-header__title"><?php the_field('title_content_page_breadrumbs') ?></div>
                    <?php endif; ?>
                </div>
                <!-- .col-->
            </div>
            <!-- .row-->
        </div>
        <!-- .b-page-header-->

        <!-- .row-->
    </div>
</div>
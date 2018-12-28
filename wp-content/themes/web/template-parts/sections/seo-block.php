<?php if (have_rows('seo_list-new')): ?>
<div class="question-section seo-block">
    <img class="seo-bg1" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img1.png" alt="img"/>
    <img class="seo-bg2" src="<?php echo get_template_directory_uri() ?>/assets/images/bg-img2.png" alt="img"/>
    <h2 class="e-title">СЕО продвижение сайта</h2>

        <?php while (have_rows('seo_list-new')): the_row(); ?>
            <div class="seo-block_content">
                <?php if (get_sub_field('seo_list-new-title')): ?>
                    <h3 class="seo-block_subtitle"><?php the_sub_field('seo_list-new-title') ?></h3>
                <?php endif; ?>
                <div class="seo-block_wrap">
                    <?php if (get_sub_field('seo_list-new-img')): ?>
                        <div class="seo-block_left">
                            <img src="<?php the_sub_field('seo_list-new-img') ?>" alt="img">
                        </div>
                    <?php endif; ?>
                    <div class="seo-block_right">
                        <div class="seo-block_table-title">
                            <?php if (get_sub_field('seo_list-new-reg')): ?>
                                <div><?php the_sub_field('seo_list-new-reg') ?></div>
                            <?php endif; ?>
                            <?php if (get_sub_field('seo_list-new-search')): ?>
                                <div><?php the_sub_field('seo_list-new-search') ?></div>
                            <?php endif; ?>
                        </div>
                        <table>
                            <tr>
                                <th>Поисковый запрос</th>
                                <th>Частотность запроса</th>
                            </tr>
                            <?php if (have_rows('seo_list-new-list')): ?>
                                <?php while (have_rows('seo_list-new-list')): the_row(); ?>
                                    <tr>
                                        <td><?php the_sub_field('seo_list-new-list1') ?></td>
                                        <td><?php the_sub_field('seo_list-new-list2') ?></td>

                                    </tr>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

</div>
 <?php endif; ?>

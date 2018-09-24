<div class="question-section" style="background-image: url('<?php the_field('hero_question_bg') ?>')">
    <div class="container-question">
        <?php if (get_field('hero_question_title')): ?>
            <h2 class="e-title"><?php the_field('hero_question_title') ?></h2>
        <?php endif; ?>
        <div class="question-section_block">
            <div class="question-section_slider js-question-slider">
                <?php if (have_rows('hero_question_reap')): ?>
                    <?php while (have_rows('hero_question_reap')): the_row(); ?>

                        <div class="question-section_item">
                            <?php if (get_sub_field('hero_question_text')): ?>
                                <div class="question-section_question">
                                    <p><?php the_sub_field('hero_question_text') ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('hero_question_answer')): ?>
                                <div class="question-section_text">
                                    <?php the_sub_field('hero_question_answer') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php if (get_field('hero_question_btn')): ?>
            <div class="question-section_btn-block">
                <a href="#question" class="question-section_btn js-pop-up"><?php the_field('hero_question_btn') ?></a>
            </div>

            <?php endif; ?>
        </div>
    </div>
</div>
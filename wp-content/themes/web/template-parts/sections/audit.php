<?php if (get_field('supplement_title_bottom')): ?>
    <div class="b-line" style="background-image:url(<?php the_field('supplement_bg') ?>);">
        <div class="grid grid--container">
            <div class="e-title e-title--light"><?php the_field('supplement_title_bottom') ?></div>
        </div>
    </div>
<?php endif; ?>
<?php $popup_option = get_option('popup'); ?>
<?php $popup_question_option = get_option('popup-question'); ?>

<div class="mfp-hide form-popup" id="callback">
    <div class="b-modal">
        <?php if (!empty($popup_option['popup-text-title'])) { ?>

            <div class="b-modal__title"><?php echo $popup_option['popup-text-title']; ?></div>
        <?php } ?>
        <?php if (!empty($popup_option['popup-shordcode-form'])) { ?>

            <?php echo do_shortcode($popup_option['popup-shordcode-form']); ?>

        <?php } ?>
    </div>
    <!-- .b-modal-->
</div>


<div class="mfp-hide form-popup" id="question">
    <div class="b-modal">
        <?php if (!empty($popup_question_option['popup-text-title2'])) { ?>

            <div class="b-modal__title"><?php echo $popup_question_option['popup-text-title2']; ?></div>
        <?php } ?>
        <?php if (!empty($popup_question_option['popup-shordcode-form2'])) { ?>

            <?php echo do_shortcode($popup_question_option['popup-shordcode-form2']); ?>

        <?php } ?>
    </div>
    <!-- .b-modal-->
</div>
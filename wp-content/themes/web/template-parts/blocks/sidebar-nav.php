<?php $sidebar_option = get_option('sidebar'); ?>
<div class="b-side">
    <div class="b-logo"><a href="index.html"><?php the_custom_logo(); ?></a>
    </div>
    <div class="b-services">
        <?php if (!empty($sidebar_option['sidebar_img'])) { ?>
            <a class="b-services__item" href="<?php echo $sidebar_option['sidebar_link']; ?>">
                <img class="icon icon-globe" src="<?php echo $sidebar_option['sidebar_img']; ?>" alt="logo">
                <?php echo $sidebar_option['sidebar_text']; ?></a>

        <?php } ?>
        <?php if (!empty($sidebar_option['sidebar_img2'])) { ?>
            <a class="b-services__item" href="<?php echo $sidebar_option['sidebar_link2']; ?>">
                <img class="icon icon-globe" src="<?php echo $sidebar_option['sidebar_img2']; ?>" alt="logo">
                <?php echo $sidebar_option['sidebar_text2']; ?></a>

        <?php } ?>
        <?php if (!empty($sidebar_option['sidebar_img3'])) { ?>
            <a class="b-services__item" href="<?php echo $sidebar_option['sidebar_link3']; ?>">
                <img class="icon icon-globe" src="<?php echo $sidebar_option['sidebar_img3']; ?>" alt="logo">
                <?php echo $sidebar_option['sidebar_text3']; ?></a>

        <?php } ?>
        <?php if (!empty($sidebar_option['sidebar_img4'])) { ?>
            <a class="b-services__item" href="<?php echo $sidebar_option['sidebar_link4']; ?>">
                <img class="icon icon-globe" src="<?php echo $sidebar_option['sidebar_img4']; ?>" alt="logo">
                <?php echo $sidebar_option['sidebar_text4']; ?></a>

        <?php } ?>
    </div>
</div>
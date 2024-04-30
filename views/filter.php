<?php
$env = $args['env'];

$current_language = pll_current_language();


?>
</div>
<div class="filter_container">
    <?php
    if ($env == 'prod') {
        if ($current_language == 'en') {
            ?>
            <div style="order: 1" class="first">
                <?php echo do_shortcode('[fe_widget id="4250"]') ?>
            </div>
            <div style="order: 2" class="second">
                <?php echo do_shortcode('[fe_widget id="4254"]') ?>
            </div>
            <div style="order: 1" class="third"class="third">
                <?php echo do_shortcode('[fe_widget id="4259"]') ?>
            </div>
            <?php
        } else if ($current_language == 'ru') {
            ?>

            <?php
        }
    }
    if ($env == 'staging') {
        if ($current_language == 'en') {
            ?>
            <div style="order: 1" class="first">
                <?php echo do_shortcode('[fe_widget id="3447"]') ?>
            </div>
            <div style="order: 2" class="second">
                <?php echo do_shortcode('[fe_widget id="3451"]') ?>
            </div>
            <div style="order: 3" class="third">
                <?php echo do_shortcode('[fe_widget id="3412"]') ?>
            </div>
            <?php
        } else if ($current_language == 'ru') {
            ?>
             <div style="order: 1" class="first">
                <?php echo do_shortcode('[fe_widget id="3497"]') ?>
            </div>
            <div style="order: 2" class="second">
                <?php echo do_shortcode('[fe_widget id="3501"]') ?>
            </div>
            <div style="order: 3" class="third">
                <?php echo do_shortcode('[fe_widget id="3510"]') ?>
            </div>
            <?php
        }
    }

    if ($env == 'local') {
        if ($current_language == 'en') {
            ?>
            <div style="order: 1" class="first">
                <?php echo do_shortcode('[fe_widget id="3447"]') ?>
            </div>
            <div style="order: 2" class="second">
                <?php echo do_shortcode('[fe_widget id="3451"]') ?>
            </div>
            <div style="order: 3" class="third">
                <?php echo do_shortcode('[fe_widget id="3412"]') ?>
            </div>
            <?php
        } else if ($current_language == 'ru') {
            ?>
             <div style="order: 1" class="first">
                <?php echo do_shortcode('[fe_widget id="3497"]') ?>
            </div>
            <div style="order: 2" class="second">
                <?php echo do_shortcode('[fe_widget id="3501"]') ?>
            </div>
            <div style="order: 3" class="third">
                <?php echo do_shortcode('[fe_widget id="3510"]') ?>
            </div>
            <?php
        }
    }
    ?>
</div>
<div class="main_page_catalog_inner container">
<?php

?>
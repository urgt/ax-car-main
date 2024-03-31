
<?php
$env = $args['env'];

if (have_posts()) {
    ?>
    <div class="filter_container">
    <?php
    if ($env == 'staging') {
        ?>
        <div style="order: 1">
            <?php echo do_shortcode('[fe_widget id="3447"]') ?>
        </div>
        <div style="order: 2">
            <?php echo do_shortcode('[fe_widget id="3451"]') ?>
        </div>
        <div style="order: 3">
            <?php echo do_shortcode('[fe_widget id="3412"]') ?>
        </div>
        <?php
    }

    if ($env == 'local') {
        ?>
        <div style="order: 1">
            <?php echo do_shortcode('[fe_widget id="3441"]') ?>
        </div>
        <div style="order: 2">
            <?php echo do_shortcode('[fe_widget id="3451"]') ?>
        </div>
        <div style="order: 3">
            <?php echo do_shortcode('[fe_widget id="3412"]') ?>
        </div>
        <?php
    }
    ?>
    </div>
    <?php
}
?>


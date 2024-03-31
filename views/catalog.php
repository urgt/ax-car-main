<div id="main_page_catalog_cards">
    <div class="main_page_catalog_cards" >

        <?php
        // проверяем есть ли посты в глобальном запросе - переменная $wp_query
        if (have_posts()) {
        // перебираем все имеющиеся посты и выводим их
        while (have_posts()) {
            the_post();
            ?>


            <?php get_template_part('views/card_component'); ?>

            <?php
        }
        ?>
    </div>
    <div style="clear:both"></div>
    <div class="navigation">
        <?php if (function_exists('my_pagenavi')) {
            my_pagenavi();
        } ?>
    </div>

    <?php
    }
    // постов нет
    else {
        echo "<h2>Записей нет.</h2>";
    }
    ?>
</div>

<div class="main_page_catalog_cards_card-wrap">

    <a href="<?php the_permalink(); ?>" class="main_page_catalog_cards_card">
        <div class="card_img">
            <img src="<?php
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $thumbnail_url_https = str_replace('http://', 'https://', $thumbnail_url);
            echo $thumbnail_url_https;
            ?>" alt=" <?php the_title(); ?>" loading="lazy">
        </div>

        <div class="buy_info">

            <div class="buy_car_title" id="textContainer">
                <span>
                    <?php the_title(); ?>
                </span>
            </div>
            <div class="buy_car_price">
                <?php
                $terms = get_the_terms($post->ID, 'buy_price');
                echo number_format($terms[0]->name, 0, '.', ' ');
                ?> AED
            </div>

        </div>
    </a>
</div>
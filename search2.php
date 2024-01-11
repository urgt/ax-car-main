<?php get_header(); ?>
<main>
  <section class="page_title"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/Section-minl.jpg)">
    <div class="page_title_block">
      <div class="page_title_text">catalogue</div>
      <div class="breadcrums">
        <span>Home</span>
        <span>Car List</span>
      </div>
    </div>
    <div class="background_overlay"></div>
  </section>
  <section class="main_page_catalog">
    <div class="main_page_catalog_inner container">
      <div class="section_subtitle luxury">Our Collection</div>
      <div class="section_title">Luxury cars For you</div>
      <div class="section_description">
        Our fleet features 2021 to 2023 cars, which are in excellent
        technical condition. We will deliver the chosen car to any
        convenient location in Dubai within 3 hours.
      </div>

      <div class="catalog_filter_block">


        <?php //echo do_shortcode( '[searchandfilter post_types="cars" fields="brands,class,price,color,number-of-seats"]') ?>
        <?php //echo do_shortcode( '[searchandfilter post_types="cars" fields="brands,class,price,color,number-of-seats"]') 
        
        echo do_shortcode('[searchandfilter id="58"]') ?>

      </div>

      <div class="main_page_catalog_cards">

        <?php
        // проверяем есть ли посты в глобальном запросе - переменная $wp_query
        if (have_posts()) {
          // перебираем все имеющиеся посты и выводим их
          while (have_posts()) {
            the_post();
            ?>

            <a href="<?php the_permalink(); ?>" class="main_page_catalog_cards_card" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        ')">
              <div class="content_car">
                <div class="car_category">
                  <?php
                  $terms = get_the_terms($post->ID, 'class');
                  foreach ($terms as $term) {
                    echo $term->name;
                  }
                  ?>
                </div>
                <div class="car_title">
                  <?php the_title(); ?>
                </div>
                <div class="car_price">
                  <?php
                  $terms = get_the_terms($post->ID, 'price');
                  foreach ($terms as $term) {
                    echo $term->name;
                  }
                  ?> AED
                </div>
                <div class="car_info">
                  <div class="car_engine">
                    Engine <br />
                    <span>
                      <?php echo get_field('fuel'); ?>
                    </span>
                  </div>
                  <div class="car_seats">
                    Seats <br />
                    <span>
                      <?php
                      $terms = get_the_terms($post->ID, 'number-of-seats');
                      foreach ($terms as $term) {
                        echo $term->name;
                      }
                      ?> Seats
                    </span>
                  </div>
                </div>
              </div>

              <div class="background_overlay"></div>
            </a>



            <?php
          }
          ?>

          <div class="navigation">
            <div class="next-posts">
              <?php next_posts_link(); ?>
            </div>
            <div class="prev-posts">
              <?php previous_posts_link(); ?>
            </div>
          </div>

          <?php
        }
        // постов нет
        else {
          echo "<h2>Записей нет.</h2>";
        }
        ?>
      </div>
    </div>
  </section>

  <section class="how_it_works container">
    <div class="section_subtitle luxury">HOW IT WORKS</div>
    <div class="section_title">Easy steps to make a rental</div>

    <div class="info_cards">
      <div class="info_cards_card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Location.svg" alt="Quick response" />
        <div class="info_cards_card_title">Learn conditions</div>
        <p class="info_cards_card_description">
          Read the Terms of Use to getfamiliar with the contract
        </p>
      </div>
      <div class="info_cards_card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Location (1).svg" alt="Quick response" />
        <div class="info_cards_card_title">Choose a car</div>
        <p class="info_cards_card_description">
          Choose from a variety of carspresented in our fleet
        </p>
      </div>
      <div class="info_cards_card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Location (2).svg" alt="Quick response" />
        <div class="info_cards_card_title">Fill in the form</div>
        <p class="info_cards_card_description">
          Complete the form to booka car lease
        </p>
      </div>
    </div>
  </section>

  <?php get_footer() ?>
<?php get_header(); ?>
<main>
  <section class="page_title"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/Section-minl.jpg)">
    <div class="page_title_block">
      <div class="page_title_text">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
          echo 'catalogue';

        } elseif ($current_language == 'ru') {
          echo 'Каталог';
        } else {
          echo 'catalogue';
        }
        ?>

      </div>
      <div class="breadcrums">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
          echo '<span>Home</span>
              <span>Car List</span>';

        } elseif ($current_language == 'ru') {
          echo '<span>Главная</span>
              <span>Каталог авто</span>';
        } else {
          echo '<span>Home</span>
              <span>Car List</span>';
        }
        ?>

      </div>
    </div>
    <div class="background_overlay"></div>
  </section>
  <section class="main_page_catalog">
    <div class="main_page_catalog_inner container">
      <?php
      $current_language = pll_current_language();
      if ($current_language == 'en') {
        echo '<div class="section_subtitle luxury">Our Collection</div>
            <div class="section_title">Luxury cars For you</div>
            <div class="section_description">
              Our fleet features 2021 to 2023 cars, which are in excellent
              technical condition. We will deliver the chosen car to any
              convenient location in Dubai within 3 hours.
            </div>';

      } elseif ($current_language == 'ru') {
        echo '<div class="section_subtitle luxury">Наша коллекция</div>
            <div class="section_title">Топовые люксовые автомобили</div>
            <div class="section_description">
              Вы можете выбрать из ряда роскошных седанов и внедорожников или приобрести надежный автомобиль среднего сегмента.
            </div>';
      } else {
        echo '<div class="section_subtitle luxury">Our Collection</div>
            <div class="section_title">Luxury cars For you</div>
            <div class="section_description">
              Our fleet features 2021 to 2023 cars, which are in excellent
              technical condition. We will deliver the chosen car to any
              convenient location in Dubai within 3 hours.
            </div>';
      }
      ?>



      <div class="catalog_filter_block">


        <?php //echo do_shortcode( '[searchandfilter post_types="cars" fields="brands,class,price,color,number-of-seats"]') ?>
        <?php echo do_shortcode('[searchandfilter post_types="cars" fields="brands,class,price,color,number-of-seats"]')

          //echo   do_shortcode('[searchandfilter id="58"]')  ?>

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
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                      echo 'Engine';

                    } elseif ($current_language == 'ru') {
                      echo 'Двигатель';
                    } else {
                      echo 'Engine';
                    }
                    ?> <br />
                    <span>
                      <?php echo get_field('fuel'); ?>
                    </span>
                  </div>
                  <div class="car_seats">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                      echo 'Seats';

                    } elseif ($current_language == 'ru') {
                      echo 'Места';
                    } else {
                      echo 'Seats';
                    }
                    ?> <br />
                    <span>
                      <?php
                      $terms = get_the_terms($post->ID, 'number-of-seats');
                      foreach ($terms as $term) {
                        echo $term->name;
                      }
                      ?>
                      <?php
                      $current_language = pll_current_language();
                      if ($current_language == 'en') {
                        echo 'seats';

                      } elseif ($current_language == 'ru') {
                        echo 'места';
                      } else {
                        echo 'seats';
                      }
                      ?>
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
    <?php
    $current_language = pll_current_language();
    if ($current_language == 'en') {
      echo '<div class="section_subtitle luxury">HOW IT WORKS</div>
          <div class="section_title">Easy steps to make a rental</div>';

    } elseif ($current_language == 'ru') {
      echo '<div class="section_subtitle luxury">Как это работает</div>
          <div class="section_title">Простые шаги для аренды</div>';
    } else {
      echo '<div class="section_subtitle luxury">HOW IT WORKS</div>
          <div class="section_title">Easy steps to make a rental</div>';
    }
    ?>

    <div class="info_cards">
      <?php
      $current_language = pll_current_language();
      if ($current_language == 'en') {
        echo '<div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location.svg" alt="Quick response" />
              <div class="info_cards_card_title">Learn conditions</div>
              <p class="info_cards_card_description">
                Read the Terms of Use to getfamiliar with the contract
              </p>
            </div>
            <div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location (1).svg" alt="Quick response" />
              <div class="info_cards_card_title">Choose a car</div>
              <p class="info_cards_card_description">
                Choose from a variety of carspresented in our fleet
              </p>
            </div>
            <div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location (2).svg" alt="Quick response" />
              <div class="info_cards_card_title">Fill in the form</div>
              <p class="info_cards_card_description">
                Complete the form to booka car lease
              </p>
            </div>';

      } elseif ($current_language == 'ru') {
        echo '<div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location.svg" alt="Quick response" />
              <div class="info_cards_card_title">Прочтите условия</div>
              <p class="info_cards_card_description">
                Прочитайте условия соглашения и свяжитесь с нами
              </p>
            </div>
            <div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location (1).svg" alt="Quick response" />
              <div class="info_cards_card_title">Выберите авто</div>
              <p class="info_cards_card_description">
                Вы можете выбрать автомобиль в каталоге
              </p>
            </div>
            <div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location (2).svg" alt="Quick response" />
              <div class="info_cards_card_title">Заполните форму</div>
              <p class="info_cards_card_description">
                Заполните форму и забронируйте автомобиль
              </p>
            </div>';
      } else {
        echo '<div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location.svg" alt="Quick response" />
              <div class="info_cards_card_title">Learn conditions</div>
              <p class="info_cards_card_description">
                Read the Terms of Use to getfamiliar with the contract
              </p>
            </div>
            <div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location (1).svg" alt="Quick response" />
              <div class="info_cards_card_title">Choose a car</div>
              <p class="info_cards_card_description">
                Choose from a variety of carspresented in our fleet
              </p>
            </div>
            <div class="info_cards_card">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Location (2).svg" alt="Quick response" />
              <div class="info_cards_card_title">Fill in the form</div>
              <p class="info_cards_card_description">
                Complete the form to booka car lease
              </p>
            </div>';
      }
      ?>

    </div>
  </section>

  <?php get_footer() ?>
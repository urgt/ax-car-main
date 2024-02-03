<?php get_header(); ?>
<main>
  <div class="car_details container">
    <div class="car_details_inner">
      <div class="car_details_content">

        <div class="car_slider">
          <!-- Swiper -->
          <div style="
                    --swiper-navigation-color: #fff;
                    --swiper-pagination-color: #fff;
                  " class="swiper mySwiper2">
            <div class="swiper-wrapper">

              <?php
              $images = get_field('buy_gallery');
              if ($images): ?>
                <?php foreach ($images as $image): ?>
                  <div class="swiper-slide">
                    <img loading="lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php
                       $current_language = pll_current_language();
                       if ($current_language == 'en') {
                         echo 'Buy';

                       } elseif ($current_language == 'ru') {
                         echo 'Купить';
                       } else {
                         echo 'Buy';
                       }
                       ?> <?php the_title(); ?> <?php
                           $terms = get_the_terms($post->ID, 'buy_colors');
                           $colors = array();
                           foreach ($terms as $term) {
                             $colors[] = $term->name;
                           }
                           echo implode(', ', $colors);
                           ?>" />
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">

            </div>
          </div>
        </div>
        <div class="car_details_price">
          <div class="car_details_title">
            <?php the_title(); ?>
          </div>
          <div class="car_details_cost"><span class="car_details_pricee">
              <?php
              $terms = get_the_terms($post->ID, 'buy_price');
              echo number_format($terms[0]->name, 0, '.', ' ');

              ?>
            </span> <span>AED</span>
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
              echo '';

            } elseif ($current_language == 'ru') {
              echo '';
            } else {
              echo '';
            }
            ?>
          </div>
        </div>
        <hr />
        <div class="car_details_info">
          <div class="block_title">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
              echo 'Car Information';

            } elseif ($current_language == 'ru') {
              echo 'Детальная информация';
            } else {
              echo 'Car Information';
            }
            ?>
          </div>

          <div class="car_details_info_items">
            <div class="car_details_items_wrapper">
              <ul class="car_details_info_property_names">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                  echo '
                      <li>
                        <span>Class</span>
                      </li>
                      <li>
                        <span>Mileage</span>
                      </li>

                      <li>
                        <span>First registration</span>
                      </li>

                      <li>
                        <span>Fuel</span>
                      </li>
					  ';

                } elseif ($current_language == 'ru') {
                  echo '
                      <li>
                        <span>Класс</span>
                      </li>
                      <li>
                        <span>Пробег</span>
                      </li>

                      <li>
                        <span>Первая регистрация</span>
                      </li>

					  <li>
                        <span>Топливо</span>
                      </li>
                      ';
                } else {
                  echo '
                      <li>
                        <span>Class</span>
                      </li>
                      <li>
                        <span>Fuel</span>
                      </li>
                      <li>
                        <span>Transmission</span>
                      </li>
                      <li>
                        <span>Engine</span>
                      </li>
                      ';
                }
                ?>
              </ul>
              <ul class="car_details_info_property_values">
                <li>
                  <span>
                    <?php
                    $terms = get_the_terms($post->ID, 'buy_class');
                    foreach ($terms as $term) {
                      echo $term->name;
                    }
                    ?>
                  </span>
                </li>
                <li>
                  <span>
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                      $cars_fleet = get_field('buy_mileage');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('buy_mileage_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('buy_mileage');
                      echo $cars_fleet; // Вывод значения по умолчанию
                    }
                    ?>
                  </span>
                </li>


                <li>
                  <span>
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                      $cars_fleet = get_field('buy_first_registration');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('buy_first_registration_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('buy_first_registration');
                      echo $cars_fleet; // Вывод значения по умолчанию
                    }
                    ?>
                  </span>
                </li>

                <li>
                  <span>
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                      $cars_fleet = get_field('buy_fuel');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('buy_fuel_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('buy_fuel');
                      echo $cars_fleet; // Вывод значения по умолчанию
                    }
                    ?>
                  </span>
                </li>


              </ul>
            </div>
            <div class="car_details_items_wrapper">
              <ul class="car_details_info_property_names">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                  echo '<li>
                        <span>Engine</span>
                      </li>
                     <li>
                        <span>Color</span>
                      </li>
					  <li>
                        <span>Transmission</span>
                      </li>
					  ';

                } elseif ($current_language == 'ru') {
                  echo '<li>
                        <span>Двигатель</span>
                      </li>
                      
                      <li>
                        <span>Цвет</span>
                      </li>
					  <li>
                        <span>Коробка передач</span>
                      </li>
					 ';
                } else {
                  echo '<li>
                        <span>Year</span>
                      </li>
                      <li>
                        <span>Bags</span>
                      </li>
                      <li>
                        <span>Color</span>
                      </li>
                      <li>
                        <span>Doors</span>
                      </li>';
                }
                ?>

              </ul>
              <ul class="car_details_info_property_values">
                <li>
                  <span>
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                      $cars_fleet = get_field('buy_engine');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('buy_engine_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('buy_engine');
                      echo $cars_fleet; // Вывод значения по умолчанию
                    }
                    ?>
                  </span>
                </li>

                <li>
                  <span>
                    <?php
                    $terms = get_the_terms($post->ID, 'buy_colors');
                    $colors = array();
                    foreach ($terms as $term) {
                      $colors[] = $term->name;
                    }
                    echo implode(', ', $colors);
                    ?>
                  </span>
                </li>
                <li>
                  <span>
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                      $cars_fleet = get_field('buy_transmission');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('buy_transmission_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('buy_transmission');
                      echo $cars_fleet; // Вывод значения по умолчанию
                    }
                    ?>
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr />
        <div class="car_details_desc">
          <div class="block_title">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
              echo 'Car Description';

            } elseif ($current_language == 'ru') {
              echo 'Описание авто';
            } else {
              echo 'Car Description';
            }
            ?>
          </div>
          <p>
            <?php the_content(); ?>
          </p>
          <p>
            <?php // display_converted_price(); ?>
          </p>
          <a  class="button mainform">
            <span>
              <?php
              $current_language = pll_current_language();
              if ($current_language == 'en') {
                echo 'BOOK NOW';

              } elseif ($current_language == 'ru') {
                echo 'Забронировать';
              } else {
                echo 'BOOK NOW';
              }
              ?>
            </span>
          </a>
        </div>
      </div>
      <div class="car_details_sidebar">
        <div class="car_details_sidebar_gallery">
          <div class="block_title">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
              echo 'Car Information';

            } elseif ($current_language == 'ru') {
              echo 'Информация об авто';
            } else {
              echo 'Car Information';
            }
            ?>
          </div>
          <div class="car_details_sidebar_gallery_imgs">
            <?php
            $images = get_field('buy_gallery');
            if ($images): ?>
              <?php foreach ($images as $image): ?>
                <a href="<?php echo esc_url($image['url']); ?>" class="foobox" rel="gallery">
                  <img loading="lazy" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" />
                </a>
              <?php endforeach; ?>

            <?php endif; ?>
          </div>
            <a id="load-more-img" class="button">
              <span>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Show more';

                } elseif ($current_language == 'ru') {
                    echo 'Показать ещё';
                } else {
                    echo 'Show more';
                }
                ?>
              </span>
            </a>
            <a id="hide-img-btn" class="button">
              <span>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Show less';

                } elseif ($current_language == 'ru') {
                    echo 'Показать меньше';
                } else {
                    echo 'Show less';
                }
                ?>
              </span>
            </a>
        </div>
        <div class="car_details_sidebar_consultant">
          <div class="consultant_info">
            <?php if (get_field('buy_consultant_photo')): ?>
              <img src="<?php the_field('buy_consultant_photo'); ?>" />
            <?php endif; ?>
            <div class="consiltant_info_name">
              <p>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                  $cars_fleet = get_field('buy_consultant');
                  echo $cars_fleet;

                } elseif ($current_language == 'ru') {
                  $cars_fleet = get_field('buy_consultant_ru');
                  echo $cars_fleet;
                } else {
                  $cars_fleet = get_field('buy_consultant');
                  echo $cars_fleet; // Вывод значения по умолчанию
                }
                ?>

            </div>
          </div>
          <div class="consultant_buttons">
            <a href="tel:+971585893990" class="button">
              <span>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                  echo 'Call us';

                } elseif ($current_language == 'ru') {
                  echo 'Позвонить';
                } else {
                  echo 'Call us';
                }
                ?>
              </span>
            </a>
            <a class="mainform button">
              <span>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                  echo 'INQUIRY';

                } elseif ($current_language == 'ru') {
                  echo 'Написать';
                } else {
                  echo 'INQUIRY';
                }
                ?>
              </span>
            </a>
          </div>

          <div class="contact_whatsapp">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
              echo 'Or get availability via';

            } elseif ($current_language == 'ru') {
              echo 'Свяжитесь с нами через';
            } else {
              echo 'Or get availability via';
            }
            ?>
            <a href="https://wa.me/+971585893990">
              <img src="<?php echo get_template_directory_uri(); ?>/img/akar-icons_whatsapp-fill.svg"
                alt="contact us right now via whatsapp" />
              <span class="luxury">WHATSAPP</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer() ?>
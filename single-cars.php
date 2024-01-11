<?php get_header(); ?>
<main>
  <section class="page_title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/6565.jpg)">
    <div class="page_title_block">
      <div class="page_title_text">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
          echo 'CAR DETAILS';

        } elseif ($current_language == 'ru') {
          echo 'Детали авто';
        } else {
          echo 'CAR DETAILS';
        }
        ?>
      </div>
      <div class="breadcrums">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
          echo '<span><a href="/">Home</a></span>
              <span><a href="/cars">Rent a car</a></span>';
          ?><span>
            <?php the_title(); ?>
          </span>
          <?php

        } elseif ($current_language == 'ru') {
          echo '<span><a href="/ru/">Главная</a></span>
              <span><a href="/ru/cars/">Аренда авто</a></span>';
          ?><span>
            <?php the_title(); ?>
          </span>
        <?php
        } else {
          echo '<span>Home</span>
              <span>Car Details</span>';
        }
        ?>

      </div>
    </div>
    <div class="background_overlay"></div>
  </section>

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
              $images = get_field('gallery');
              if ($images): ?>
                <?php foreach ($images as $image): ?>
                  <div class="swiper-slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php
                       $current_language = pll_current_language();
                       if ($current_language == 'en') {
                         echo 'Buy';

                       } elseif ($current_language == 'ru') {
                         echo 'Аренда';
                       } else {
                         echo 'Buy';
                       }
                       ?> <?php the_title(); ?> <?php
                           $terms = get_the_terms($post->ID, 'color');
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
              $terms = get_the_terms($post->ID, 'price');
              echo number_format($terms[0]->name, 0, '.', ' ');
              ?>
            </span><span>AED</span>
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
              echo '/day';

            } elseif ($current_language == 'ru') {
              echo '/в день';
            } else {
              echo '/day';
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
                        <span>Fuel</span>
                      </li>
                      <li>
                        <span>Transmission</span>
                      </li>
                      <li>
                        <span>Engine</span>
                      </li>
                      <li>
                        <span>Drive Unit</span>
                      </li>';

                } elseif ($current_language == 'ru') {
                  echo '
                      <li>
                        <span>Класс</span>
                      </li>
                      <li>
                        <span>Топливо</span>
                      </li>
                      <li>
                        <span>Коробка</span>
                      </li>
                      <li>
                        <span>Двигатель</span>
                      </li>
                      <li>
                        <span>Привод</span>
                      </li>';
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
                      <li>
                        <span>Drive Unit</span>
                      </li>';
                }
                ?>
              </ul>
              <ul class="car_details_info_property_values">
                <li>
                  <span>
                    <?php
                    $terms = get_the_terms($post->ID, 'class');
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
                      $cars_fleet = get_field('fuel');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('fuel_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('fuel');
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
                      $cars_fleet = get_field('transmission');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('transmission_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('transmission');
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
                      $cars_fleet = get_field('engine');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('engine_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('engine');
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
                      $cars_fleet = get_field('drive_unit');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('drive_unit_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('drive_unit');
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

                } elseif ($current_language == 'ru') {
                  echo '<li>
                        <span>Год</span>
                      </li>
                      <li>
                        <span>Чемоданы</span>
                      </li>
                      <li>
                        <span>Цвет</span>
                      </li>
                      <li>
                        <span>Двери</span>
                      </li>';
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
                      $cars_fleet = get_field('year');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('year_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('year');
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
                      $cars_fleet = get_field('bags');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('bags_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('bags');
                      echo $cars_fleet; // Вывод значения по умолчанию
                    }
                    ?>
                  </span>
                </li>
                <li>
                  <span>
                    <?php
                    $terms = get_the_terms($post->ID, 'color');
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
                      $cars_fleet = get_field('doors');
                      echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                      $cars_fleet = get_field('doors_ru');
                      echo $cars_fleet;
                    } else {
                      $cars_fleet = get_field('doors');
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
            <?php display_converted_price(); ?>
          </p>
          <a href="#" class="button mainform2">
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
            $images = get_field('gallery');
            if ($images): ?>
              <?php foreach ($images as $image): ?>
                <a href="<?php echo esc_url($image['url']); ?>" class="foobox" rel="gallery">
                  <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" />
                </a>
              <?php endforeach; ?>

            <?php endif; ?>
          </div>
        </div>
        <div class="car_details_sidebar_consultant">
          <div class="consultant_info">
            <?php if (get_field('consultant_photo')): ?>
              <img src="<?php the_field('consultant_photo'); ?>" />
            <?php endif; ?>
            <div class="consiltant_info_name">
              <p>
                <?php echo get_field('consultant'); ?>
              </p>

              <span>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                  echo 'Car rental consultant';

                } elseif ($current_language == 'ru') {
                  echo 'Консультант по авто';
                } else {
                  echo 'Car rental consultant';
                }
                ?>
              </span>
            </div>
          </div>
          <div class="consultant_buttons">
            <a href="tel:<?php echo get_field('consultant_number'); ?>" class="button">
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
            <a href="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
              echo '/buy-a-car';

            } elseif ($current_language == 'ru') {
              echo '/ru/buy-a-car';
            } else {
              echo '/buy-a-car';
            }
            ?>" class="button">
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
            <a href="https://wa.me/<?php echo get_field('consultant_number'); ?>">
              <img src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/akar-icons_whatsapp-fill.svg"
                alt="contact us right now via whatsapp" />
              <span class="luxury">WHATSAPP</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer() ?>
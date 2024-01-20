<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--<meta name="viewport" content="width=500">-->

  <?php wp_head(); ?>

</head>

<body>
  <div class="wrapper">
    <header class="header container">
      <div class="menu_toggle">
        <input type="checkbox" id="checkbox" />
        <label for="checkbox" class="toggle" onclick="toggleMenu()">
          <div class="bars" id="bar1"></div>
          <div class="bars" id="bar3"></div>
        </label>
      </div>
      <a href="<?php
      $current_language = pll_current_language();
      if ($current_language == 'en') {
        echo '/';

      } elseif ($current_language == 'ru') {
        echo '/ru';
      } else {
        echo '/';
      }
      ?>"><img style="width:100px" data-aos="fade" data-aos-easing="ease-in-out"
          src="/wp-content/uploads/2023/12/AX_MOTORS_Logo-e1702210136781.png" alt="AX MOTORS" /></a>

      <nav class="header_nav " data-aos="fade" data-aos-easing="ease-in-out">
        <ul class="nav">
          <?php
          $current_language = pll_current_language();
          if ($current_language == 'en') {
            echo '
            <a href="/buy_a_car" class="nav_link"><li>Buy a car</li></a>
            <a href="/sell" class="nav_link"><li>Sell a car</li></a>    
            <a href="/conditions" class="nav_link"><li>Conditions</li></a>    
            <a href="/about-us" class="nav_link"><li>About</li></a>
            <a href="/contact-us" class="nav_link"><li>Contact us</li></a>';

          } elseif ($current_language == 'ru') {
            echo '
            <a href="/ru/buy_a_car" class="nav_link"><li>Купить авто</li></a>
            <a href="/ru/sell" class="nav_link"><li>Продать авто</li></a>
            <a href="/ru/conditions" class="nav_link"><li>Условия</li></a>
            <a href="/ru/about-us" class="nav_link"><li>О нас</li></a>
            <a href="/ru/contact-us" class="nav_link"><li>Контакты</li></a>';
          } else {
            echo '
            <a href="/buy_a_car" class="nav_link"><li>Buy a car</li></a>
            <a href="/sell" class="nav_link"><li>Sell a car</li></a>    
            <a href="/conditions" class="nav_link"><li>Conditions</li></a>   
            <a href="/about-us" class="nav_link"><li>About</li></a>
            <a href="/contact-us" class="nav_link"><li>Contact us</li></a>';
          }
          ?>
        </ul>
      </nav>

      <div class="header_right " data-aos="fade" data-aos-easing="ease-in-out">
        <ul class="social-links ">
          <li class="header-search">
            <?php echo do_shortcode('[ivory-search id="3133" title="Search"]') ?>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ic-search.svg" alt=""> -->
          </li>
          <li>
            <img class="ic-account" src="<?php echo get_template_directory_uri(); ?>/img/ic-account.svg" alt="">

          </li>
          <li>
            <div>
              <div id="lang-form">
                <?php //pll_the_languages( array( 'dropdown' => 1 ) ); ?>
                <?php
                // add "raw" key and save data to variable
                
                $langs_array = pll_the_languages(array('dropdown' => 1, 'hide_current' => 1, 'raw' => 1));

                ?>


                <?php if ($langs_array): ?>
                  <div class="drop-block lang">
                    <?php foreach ($langs_array as $lang): ?>
                      <a href="<?php echo $lang['url']; ?>" class="drop-block__link">
                        <?php echo $lang['slug']; ?>
                      </a>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </li>
        </ul>

        <a href="tel:+971585893990" class="button">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 2.svg" alt="Call us"
            class="header_call_icon" />
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
      </div>
    </header>
    <div class="mobile_search" data-aos="fade">
      <?php echo do_shortcode('[ivory-search id="3133" title="Search"]') ?>
    </div>
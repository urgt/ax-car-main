<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!--<meta name="viewport" content="width=500">-->
  <?php wp_head(); ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <?php
  if (home_url() == 'http://axmotors.ae' || home_url() == 'https://axmotors.ae') {
    $env = 'prod';
  } elseif (home_url() == 'https://axmotors-test.axdev.cloud' || home_url() == 'http://axmotors-test.axdev.cloud') {
    $env = 'staging';
  } else {
    $env = 'local';
  }

  if ($env == 'prod') {

    ?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-MX8TL6TV');</script>
    <!-- End Google Tag Manager -->

    <?php

  }
  ?>

</head>

<body>
  <?php

  if ($env == 'prod') {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MX8TL6TV" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
  } ?>
  <div class="wrapper">
    <header class="header container">
      <div class="menu_toggle">
        <input type="checkbox" id="checkbox" />
        <label for="checkbox" id="toggle_menu_click" class="toggle">
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
      ?>"><img style="width:100px" src="<?php echo get_template_directory_uri(); ?>/img/AX_MOTORS.webp"
          alt="AX MOTORS" /></a>

          <nav class="header_nav">
    <ul class="nav">
        <?php
        $current_language = pll_current_language();
        $current_url = $_SERVER['REQUEST_URI'];

        $links = [
            'en' => [
                '/buy/' => 'Buy',
                '/sell/' => 'Sell',
                '/conditions/' => 'Our process',
                '/about-us/' => 'About',
                '/contact-us/' => 'Contact us'
            ],
            'ru' => [
                '/ru/buy/' => 'Купить',
                '/ru/sell/' => 'Продать',
                '/ru/conditions/' => 'Наши процессы',
                '/ru/about-us/' => 'О нас',
                '/ru/contact-us/' => 'Контакты'
            ]
        ];

        foreach ($links[$current_language] as $url => $label) {

            $class = ($current_url == $url) ? 'active' : '';
            echo '<li class="' . $class . '"><a href="' . $url . '" class="nav_link">' . $label . '</a></li>';
        }
        ?>
    </ul>
</nav>

      <!-- <nav class="header_nav ">
        <ul class="nav">
          <?php
          $current_language = pll_current_language();
          if ($current_language == 'en') {
            echo '
            <li><a href="/buy" class="nav_link">Buy</a></li>
            <li><a href="/sell" class="nav_link">Sell</a> </li>   
            <li><a href="/conditions" class="nav_link">Process</a> </li>   
            <li><a href="/about-us" class="nav_link">About</a></li>
            <li><a href="/contact-us" class="nav_link">Contact us</a></li>';

          } elseif ($current_language == 'ru') {
            echo '
            <li><a href="/ru/buy" class="nav_link">Купить</a></li>
            <li><a href="/ru/sell" class="nav_link">Продать</a></li>
            <li><a href="/ru/conditions" class="nav_link">Процессы</a></li>
            <li><a href="/ru/about-us" class="nav_link">О нас</a></li>
            <li><a href="/ru/contact-us" class="nav_link">Контакты</a></li>';
          } else {
            echo '
            <li><a href="/buy" class="nav_link">Buy</a></li>
            <li><a href="/sell" class="nav_link">Sell</a></li>   
            <li><a href="/conditions" class="nav_link">Conditions</a></li>
            <li><a href="/about-us" class="nav_link">About</a></li>
            <li><a href="/contact-us" class="nav_link">Contact us</a></li>';
          }
          ?>
        </ul>
      </nav> -->
      <div class="header_right ">
        <ul class="social-links ">
          <li class="header-search">
            <?php echo do_shortcode('[ivory-search id="3228" title="Search"]') ?>
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
                        <?php echo pll_current_language(); ?>
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
    <div class="mobile_search">
      <?php echo do_shortcode('[ivory-search id="3228" title="Search"]') ?>
    </div>
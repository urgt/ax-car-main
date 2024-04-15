<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="yandex-verification" content="54e4e717d9ca8ace"/>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(96867058, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/96867058" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <?php 
  if($env == 'prod'){

    ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(96867058, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/96867058" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <?php

  }
  ?>
    

    <!--<meta name="viewport" content="width=500">-->
    <!--<meta name="viewport" content="width=500">-->

    <?php wp_head(); ?>
    <?php wp_head(); ?>

</head>

<body>
<div class="wrapper">
<div class="wrapper">
    <header class="header container">
        <div class="menu_toggle">
            <input type="checkbox" id="checkbox"/>
            <label for="checkbox" class="toggle" onclick="toggleMenu()">
                <div class="bars" id="bar1"></div>
                <div class="bars" id="bar3"></div>
            </label>
        </div>
        <a href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/';
        <div class="menu_toggle">
            <input type="checkbox" id="checkbox"/>
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
        ?>"><img style="width:100px"
                 src="/wp-content/uploads/2023/12/AX_MOTORS_Logo-e1702210136781.png" alt="AX MOTORS"/></a>
        } elseif ($current_language == 'ru') {
            echo '/ru';
        } else {
            echo '/';
        }
        ?>"><img style="width:100px"
                 src="/wp-content/uploads/2023/12/AX_MOTORS_Logo-e1702210136781.png" alt="AX MOTORS"/></a>

      <nav class="header_nav " >
        <ul class="nav">
          <?php
          $current_language = pll_current_language();
          if ($current_language == 'en') {
            echo '
            <li><a href="/buy" class="nav_link">Buy</a></li>
            <li><a href="/sell" class="nav_link">Sell</a> </li>   
            <li><a href="/conditions" class="nav_link">Conditions</a> </li>   
            <li><a href="/about-us" class="nav_link">About</a></li>
            <li><a href="/contact-us" class="nav_link">Contact us</a></li>';

          } elseif ($current_language == 'ru') {
            echo '
            <li><a href="/ru/buy" class="nav_link">Купить</a></li>
            <li><a href="/ru/sell" class="nav_link">Продать</a></li>
            <li><a href="/ru/conditions" class="nav_link">Условия</a></li>
            <li><a href="/ru/about-us" class="nav_link">О нас</a></li>
            <li><a href="/ru/contact-us" class="nav_link">Контакты</a></li>';
                } else {
                    echo '
                } else {
                    echo '
            <li><a href="/buy" class="nav_link">Buy a car</a></li>
            <li><a href="/sell" class="nav_link">Sell a car</a></li>   
            <li><a href="/conditions" class="nav_link">Conditions</a></li>
            <li><a href="/about-us" class="nav_link">About</a></li>
            <li><a href="/contact-us" class="nav_link">Contact us</a></li>';
                }
                ?>
            </ul>
        </nav>
                }
                ?>
            </ul>
        </nav>

        <div class="header_right ">
            <ul class="social-links ">
                <li class="header-search">
                    <?php echo do_shortcode('[ivory-search id="3228" title="Search"]') ?>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ic-search.svg" alt=""> -->
                </li>
                <li>
                    <img class="ic-account" src="<?php echo get_template_directory_uri(); ?>/img/ic-account.svg" alt="">
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
                </li>
                <li>
                    <div>
                        <div id="lang-form">
                            <?php //pll_the_languages( array( 'dropdown' => 1 ) ); ?>
                            <?php
                            // add "raw" key and save data to variable

                            $langs_array = pll_the_languages(array('dropdown' => 1, 'hide_current' => 1, 'raw' => 1));

                            ?>
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
                     class="header_call_icon"/>
                <span>
            <a href="tel:+971585893990" class="button">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Vector 2.svg" alt="Call us"
                     class="header_call_icon"/>
                <span>
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'Call us';
                echo 'Call us';

            } elseif ($current_language == 'ru') {
                echo 'Позвонить';
                echo 'Позвонить';
            } else {
                echo 'Call us';
                echo 'Call us';
            }
            ?>
          </span>
            </a>
        </div>
            </a>
        </div>
    </header>
    <div class="mobile_search">
        <?php echo do_shortcode('[ivory-search id="3228" title="Search"]') ?>
    <div class="mobile_search">
        <?php echo do_shortcode('[ivory-search id="3228" title="Search"]') ?>
    </div>
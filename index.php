<?php get_header(); ?>
<main class="homepage_main">

    <section class="new_hero_section">
        <div class="new_hero_content container">
            <h1 class="new_hero_title" data-aos="fade-up">
                <?php the_title(); ?>
            </h1>
            <div class="hero_subtitle" data-aos="fade-up" data-aos-delay="100">
                <?php the_content(); ?>
            </div>

            <div style="display:flex;">


                <a href="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo '/buy_a_car';

                } elseif ($current_language == 'ru') {
                    echo '/ru/buy_a_car';
                } else {
                    echo '/cars';
                }
                ?>" class="button" data-aos="fade-up" data-aos-delay="200" style="">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'FIND YOUR CAR';

                    } elseif ($current_language == 'ru') {
                        echo 'Купить авто';
                    } else {
                        echo 'FIND YOUR CAR';
                    }
                    ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
                </a>

            </div>

        </div>

    </section>





    <section class="main_page_catalog">
        <div class="main_page_catalog_inner">
            <div class="section_title container" data-aos="fade-up">
                <h2>
                    <?php
                    $cars_fleet = get_field('cars_fleet');
                    if ($cars_fleet):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $cars_fleet['section_title_en'];

                        } elseif ($current_language == 'ru') {
                            echo $cars_fleet['section_title_ru'];
                        } else {
                            echo $cars_fleet['section_title_en'];
                        }
                    endif;
                    ?>
                </h2>
            </div>
            <div class="section_description container" data-aos="fade-up" data-aos-delay="100">
                <?php
                $cars_fleet = get_field('cars_fleet');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['section_description_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['section_description_ru'];
                    } else {
                        echo $cars_fleet['section_description_en'];
                    }
                endif;
                ?>

            </div>



            <div class="logos_section container classes" id="classes">

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_a_car';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_a_car';
                    } else {
                        echo '/buy_a_car';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alcars.png" alt="All cars" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'All cars';

                        } elseif ($current_language == 'ru') {
                            echo 'Все авто';
                        } else {
                            echo 'All cars';
                        }
                        ?>
                    </a>
                </div>

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_class/business-class';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_class/business-class';
                    } else {
                        echo '/buy_class/business-class';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/businessclass.png"
                            alt="Business class" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Business class';

                        } elseif ($current_language == 'ru') {
                            echo 'Бизнес класс';
                        } else {
                            echo 'Business class';
                        }
                        ?>
                    </a>
                </div>

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_class/middle-class';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_class/middle-class';
                    } else {
                        echo '/buy_class/middle-class';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/middleclass.png"
                            alt="Middle class" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Middle class';

                        } elseif ($current_language == 'ru') {
                            echo 'Средний класс';
                        } else {
                            echo 'Middle class';
                        }
                        ?>
                    </a>
                </div>

                <div style="text-align:center;">
                    <a href="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo '/buy_class/sport-cars';

                    } elseif ($current_language == 'ru') {
                        echo '/ru/buy_class/sport-cars';
                    } else {
                        echo '/buy_class/sport-cars';
                    }
                    ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sportcars.png" alt="Sport cars" /><br>
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Sport cars';

                        } elseif ($current_language == 'ru') {
                            echo 'Спорткары';
                        } else {
                            echo 'Sport cars';
                        }
                        ?>
                    </a>
                </div>


            </div>
        </div>
    </section>


    <section class="cta_section container">

        <div class="cta_section_left" data-aos="fade-left" data-aos-delay="200">
            <img src="<?php echo get_template_directory_uri(); ?>/img/leftauto.jpg" alt="<?php
               $current_language = pll_current_language();
               if ($current_language == 'en') {
                   echo 'mercedes benz e class 2022 in Dubai';

               } elseif ($current_language == 'ru') {
                   echo 'mercedes benz e class 2022 в Дубае';
               } else {
                   echo 'mercedes benz e class 2022 in Dubai';
               }
               ?>" />
        </div>

        <div class="cta_section_right">

            <div class="section_title" data-aos="fade-up" data-aos-delay="150">
                <h2>
                    <?php
                    $cars_fleet = get_field('our-service');
                    if ($cars_fleet):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $cars_fleet['our_service_title_en'];

                        } elseif ($current_language == 'ru') {
                            echo $cars_fleet['our_service_title_ru'];
                        } else {
                            echo $cars_fleet['section_title_en'];
                        }
                    endif;
                    ?>
                </h2>
            </div>
            <div class="section_description" data-aos="fade-up" data-aos-delay="300">


                <div class="tabs">
                    <div class="tab active">
                        <?php if ($current_language == 'en') {
                            echo "BUY";

                        } elseif ($current_language == 'ru') {
                            echo "КУПИТЬ";
                        } else {
                            echo "BUY";
                        } ?>
                    </div>
                    <div class="tab">
                        <?php if ($current_language == 'en') {
                            echo "SELL";

                        } elseif ($current_language == 'ru') {
                            echo "ПРОДАТЬ";
                        } else {
                            echo "SELL";
                        } ?>
                    </div>
                    <div class="tab">
                        <?php if ($current_language == 'en') {
                            echo "TRADING";

                        } elseif ($current_language == 'ru') {
                            echo "ТРЕЙДИНГ";
                        } else {
                            echo "TRADING";
                        } ?>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="content-tab active">
                        <?php
                        $cars_fleet = get_field('our-service');
                        if ($cars_fleet):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $cars_fleet['our_service_buy_en'];

                            } elseif ($current_language == 'ru') {
                                echo $cars_fleet['our_service_buy_ru'];
                            } else {
                                echo $cars_fleet['section_description_en'];
                            }
                        endif;
                        ?>
                    </div>
                    <div class="content-tab">
                        <?php
                        $cars_fleet = get_field('our-service');
                        if ($cars_fleet):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $cars_fleet['our_service_sell_en'];

                            } elseif ($current_language == 'ru') {
                                echo $cars_fleet['our_service_sell_ru'];
                            } else {
                                echo $cars_fleet['section_description_en'];
                            }
                        endif;
                        ?>
                    </div>
                    <div class="content-tab">
                        <?php
                        $cars_fleet = get_field('our-service');
                        if ($cars_fleet):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $cars_fleet['our_service_trading_en'];

                            } elseif ($current_language == 'ru') {
                                echo $cars_fleet['our_service_trading_ru'];
                            } else {
                                echo $cars_fleet['section_description_en'];
                            }
                        endif;
                        ?>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="how_it_works container">
        <div class="section_subtitle luxury" data-aos="fade-up">


            <?php
            $cars_fleet = get_field('how_it_works');
            if ($cars_fleet):
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo $cars_fleet['section_subtitle_en'];

                } elseif ($current_language == 'ru') {
                    echo $cars_fleet['section_subtitle_ru'];
                } else {
                    echo $cars_fleet['section_subtitle_en'];
                }
            endif;
            ?>
        </div>
        <div class="section_title" data-aos="fade-up" data-aos-delay="100">
            <h2>
                <?php
                $cars_fleet = get_field('how_it_works');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['section_title_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['section_title_ru'];
                    } else {
                        echo $cars_fleet['section_title_en'];
                    }
                endif;
                ?>
            </h2>
        </div>

        <div class="info_cards">
            <div class="info_cards_card" data-aos="fade-up" data-aos-delay="300">
                <div class="info_cards_card_title top">
                    <a href="<?php
                    $translated_post_id = pll_get_post(get_page_by_path('conditions')->ID, pll_current_language());
                    if ($translated_post_id) {
                        $page_url = get_permalink($translated_post_id);
                        echo $page_url;
                    } else {
                        // Fallback in case the translation is not available
                        echo home_url('/' . $page_slug); // Display the default language link as a fallback
                    }
                    ?>">
                        <?php
                        $cars_fleet = get_field('how_it_works');
                        if ($cars_fleet):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $cars_fleet['learn_conditions_en'];

                            } elseif ($current_language == 'ru') {
                                echo $cars_fleet['learn_conditions_ru'];
                            } else {
                                echo $cars_fleet['learn_conditions_en'];
                            }
                        endif;
                        ?>
                    </a>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow1.svg" alt="Go">
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $cars_fleet = get_field('how_it_works');
                    if ($cars_fleet):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $cars_fleet['read_the_terms_en'];

                        } elseif ($current_language == 'ru') {
                            echo $cars_fleet['read_the_terms_ru'];
                        } else {
                            echo $cars_fleet['read_the_terms_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card" data-aos="fade-up" data-aos-delay="450">

                <div class="info_cards_card_title top">

                    <a href="<?php
                    $url = get_site_url();
                    if ($current_language == 'en') {
                        echo $url . '/buy_a_car';
                    } else {
                        echo $url . '/ru/buy_a_car';
                    }

                    ?>">
                        <?php
                        $cars_fleet = get_field('how_it_works');
                        if ($cars_fleet):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $cars_fleet['choose_a_car_en'];

                            } elseif ($current_language == 'ru') {
                                echo $cars_fleet['choose_a_car_ru'];
                            } else {
                                echo $cars_fleet['choose_a_car_en'];
                            }
                        endif;
                        ?>
                    </a>

                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow1.svg" alt="Go">
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $cars_fleet = get_field('how_it_works');
                    if ($cars_fleet):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $cars_fleet['choose_from_en'];

                        } elseif ($current_language == 'ru') {
                            echo $cars_fleet['choose_from_ru'];
                        } else {
                            echo $cars_fleet['choose_from_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card" data-aos="fade-up" data-aos-delay="600">
                <div class="info_cards_card_title top">

                    <a class="mainform">
                        <?php
                        $cars_fleet = get_field('how_it_works');
                        if ($cars_fleet):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $cars_fleet['fill_in_the_form_en'];

                            } elseif ($current_language == 'ru') {
                                echo $cars_fleet['fill_in_the_form_ru'];
                            } else {
                                echo $cars_fleet['fill_in_the_form_en'];
                            }
                        endif;
                        ?>
                    </a>

                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow1.svg" alt="Go">
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $cars_fleet = get_field('how_it_works');
                    if ($cars_fleet):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $cars_fleet['complete_the_form_en'];

                        } elseif ($current_language == 'ru') {
                            echo $cars_fleet['complete_the_form_ru'];
                        } else {
                            echo $cars_fleet['complete_the_form_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
        </div>
    </section>


    <section class="logos_section brands" id="brands">
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/porsche/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/porsche/';
        } else {
            echo '/buy_brands/porsche/';
        }
        ?>"><img width="100" style="padding-top:2px;" data-aos="fade-up" data-aos-delay="50"
                src="<?php echo get_template_directory_uri(); ?>/img/Porsche11.svg" alt="Ax cars Porsche" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/mercedes-benz/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/mercedes-benz/';
        } else {
            echo '/buy_brands/mercedes-benz/';
        }
        ?>"><img width="100" data-aos="fade-up" data-aos-delay="150"
                src="<?php echo get_template_directory_uri(); ?>/img/Mercedes11.svg" alt="Ax cars Mercedes Benz" /></a>
        <a class="brand" class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/bentley/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/bentley/';
        } else {
            echo '/buy_brands/bentley/';
        }
        ?>" style="padding-top:10px"><img width="150" data-aos="fade-up" data-aos-delay="250"
                src="<?php echo get_template_directory_uri(); ?>/img/Bentley11.svg" alt="Ax cars Bentley" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/bmw/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/bmw/';
        } else {
            echo '/buy_brands/bmw/';
        }
        ?>"><img width="100" data-aos="fade-up" data-aos-delay="350"
                src="<?php echo get_template_directory_uri(); ?>/img/BMW11.svg" alt="Ax cars BMW" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/lamborghini/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/lamborghini/';
        } else {
            echo '/buy_brands/lamborghini/';
        }
        ?>"><img width="75" style="padding-top:15px" data-aos="fade-up" data-aos-delay="450"
                src="<?php echo get_template_directory_uri(); ?>/img/Lamborghini.svg" alt="Ax cars Lamborghini" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/mclaren/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/mclaren/';
        } else {
            echo '/buy_brands/mclaren/';
        }
        ?>" style="padding-top:2px"><img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Mclaren22.svg" alt="Ax cars Mclaren" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/rolls-royce/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/rolls-royce/';
        } else {
            echo '/buy_brands/rolls-royce/';
        }
        ?>" style="padding-top:5px;"><img width="75" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Rolls Royce11.svg" alt="Ax cars Rolls Roys" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/ferrari/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/ferrari/';
        } else {
            echo '/buy_brands/ferrari/';
        }
        ?>" style="padding-top:3px"><img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Ferrari11.svg" alt="Ax cars Ferrari" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/land-rover/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/land-rover/';
        } else {
            echo '/buy_brands/land-rover/';
        }
        ?>" style="padding-top:12px"><img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Land Rover11.svg" alt="Ax cars Land Rover" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/cadillac/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/cadillac/';
        } else {
            echo '/buy_brands/cadillac/';
        }
        ?>" style="padding-top:7px"><img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Cadillac22.svg" alt="Ax cars Cadillac" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/jaguar/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/jaguar/';
        } else {
            echo '/buy_brands/jaguar/';
        }
        ?>" style="padding-top:15px"><img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Jaguar11.svg" alt="Jaguar" /></a>
        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/audi/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/audi/';
        } else {
            echo '/buy_brands/audi/';
        }
        ?>" style="padding-top:13px">
            <img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Audi11.svg" alt="Ax cars Audi" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/bugatti/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/bugatti/';
        } else {
            echo '/buy_brands/bugatti/';
        }
        ?>" style="padding-top:5px">
            <img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Bugatti11 (1).svg" alt="Ax cars Bugatti" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/lotus/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/lotus/';
        } else {
            echo '/buy_brands/lotus/';
        }
        ?>" style="padding-top:20px">
            <img width="80" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Lotus11.svg" alt="Ax cars Lotus" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/lincoln/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/lincoln/';
        } else {
            echo '/buy_brands/lincoln/';
        }
        ?>" style="padding-top:17px">
            <img width="80" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Lincoln11.svg" alt="Ax cars Lincoln" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/maserati/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/maserati/';
        } else {
            echo '/buy_brands/maserati/';
        }
        ?>" style="padding-top:15px">
            <img width="75" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Layer_17 (3).svg" alt="Ax cars Maserati" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/corvette/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/corvette/';
        } else {
            echo '/buy_brands/corvette/';
        }
        ?>" style="padding-top:16px">
            <img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Corvette11.svg" alt="Ax cars Corvette" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/mini/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/mini/';
        } else {
            echo '/buy_brands/mini/';
        }
        ?>" style="padding-top:20px">
            <img width="100" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Mini11.svg" alt="Ax cars Mini" /></a>

        <a class="brand" href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy_brands/aston-martin/';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy_brands/aston-martin';
        } else {
            echo '/buy_brands/aston-martin/';
        }
        ?>" style="padding-top:18px">
            <img width="120" data-aos="fade-up" data-aos-delay="550"
                src="<?php echo get_template_directory_uri(); ?>/img/Aston Martin11.svg" alt="Aston Martin" /></a>

    </section>


    <section class="how_it_works container">
        <div class="section_subtitle luxury" data-aos="fade-up" data-aos-delay="300">
            <?php
            $top_cars = get_field('why_choose_us');
            if ($top_cars):
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo $top_cars['subtitle_en'];

                } elseif ($current_language == 'ru') {
                    echo $top_cars['subtitle_ru'];
                } else {
                    echo $top_cars['learn_conditions_en'];
                }
            endif;
            ?>
        </div>
        <div class="section_title" data-aos="fade-up" data-aos-delay="450">
            <?php
            $top_cars = get_field('why_choose_us');
            if ($top_cars):
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo $top_cars['title_en'];

                } elseif ($current_language == 'ru') {
                    echo $top_cars['title_ru'];
                } else {
                    echo $top_cars['learn_conditions_en'];
                }
            endif;
            ?>
        </div>
        <div class="section_description" data-aos="fade-up" data-aos-delay="600">
            <?php
            $top_cars = get_field('why_choose_us');
            if ($top_cars):
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo $top_cars['description_en'];

                } elseif ($current_language == 'ru') {
                    echo $top_cars['description_ru'];
                } else {
                    echo $top_cars['learn_conditions_en'];
                }
            endif;
            ?>
        </div>
        <div class="info_cards" data-aos="fade-up" data-aos-delay="750">
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/3-1.svg" alt="Comprehensive Services" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_title_1'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_title_1_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_text_1'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_text_1_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/3-2.svg" alt="After-Sales Services" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_title_2'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_title_2_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_text_2'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_text_2_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1-7.svg" alt="Customer-Centric Approach" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_title_3'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_title_3_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_text_3'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_text_3_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/3-3.svg" alt="Transparent Transactions" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_title_4'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_title_4_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_text_4'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_text_4_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1-5.svg" alt="Diverse Fleet" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_title_5'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_title_5_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_text_5'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_text_5_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1-6.svg" alt="Quality Assurance" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_title_6'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_title_6_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('why_choose_us');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['card_text_6'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['card_text_6_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
        </div>
    </section>



    <section class="cta_section container">

        <div class="cta_two_section_left">

            <div class="section_title" data-aos="fade-up" data-aos-delay="150">
                <h2>
                    <?php
                    $cars_fleet = get_field('brokerage_services');
                    if ($cars_fleet):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $cars_fleet['section_title_en'];

                        } elseif ($current_language == 'ru') {
                            echo $cars_fleet['section_title_ru'];
                        } else {
                            echo $cars_fleet['section_title_en'];
                        }
                    endif;
                    ?>
                </h2>
            </div>
            <div class="section_description" data-aos="fade-up" data-aos-delay="300">


                <?php
                $cars_fleet = get_field('brokerage_services');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['section_description_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['section_description_ru'];
                    } else {
                        echo $cars_fleet['section_description_en'];
                    }
                endif;
                ?>


            </div>
            <a class="mainform button" data-aos="fade-up" data-aos-delay="450">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'GET CONSULTATION';

                } elseif ($current_language == 'ru') {
                    echo 'УЗНАТЬ БОЛЬШЕ';
                } else {
                    echo 'DISCOVER MORE';
                }
                ?>

                <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
            </a>
        </div>


        <div class="cta_two_section_right" data-aos="fade-left" data-aos-delay="200">
            <img src="<?php echo get_template_directory_uri(); ?>/img/man.jpg" alt="<?php
               $current_language = pll_current_language();
               if ($current_language == 'en') {
                   echo 'mercedes benz e class 2022 in Dubai';

               } elseif ($current_language == 'ru') {
                   echo 'mercedes benz e class 2022 в Дубае';
               } else {
                   echo 'mercedes benz e class 2022 in Dubai';
               }
               ?>" />
        </div>


    </section>






    <section class="reviews_section">
        <div class="reviews_inner container">
            <div class="section_title" data-aos="fade-up" data-aos-delay="200">
                <?php
                $cars_fleet = get_field('reviews');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['section_title_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['section_title_ru'];
                    } else {
                        echo $cars_fleet['section_title_en'];
                    }
                endif;
                ?>
            </div>
            <div class="swiper review-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review_item" data-aos="fade-up" data-aos-delay="350">
                            <div class="review_author">

                                <div class="review_author_info">
                                    <div class="review_author_name">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_name_one_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_name_one_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_name_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                    <div class="review_author_country">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_country_one_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_country_one_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_country_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <p class="review_text">
                                <?php
                                $cars_fleet = get_field('reviews');
                                if ($cars_fleet):
                                    $current_language = pll_current_language();
                                    if ($current_language == 'en') {
                                        echo $cars_fleet['review_text_one_en'];

                                    } elseif ($current_language == 'ru') {
                                        echo $cars_fleet['review_text_one_ru'];
                                    } else {
                                        echo $cars_fleet['review_text_one_en'];
                                    }
                                endif;
                                ?>
                            </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review_item" data-aos="fade-up" data-aos-delay="350">
                            <div class="review_author">

                                <div class="review_author_info">
                                    <div class="review_author_name">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_name_two_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_name_two_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_name_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                    <div class="review_author_country">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_country_two_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_country_two_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_country_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <p class="review_text">
                                <?php
                                $cars_fleet = get_field('reviews');
                                if ($cars_fleet):
                                    $current_language = pll_current_language();
                                    if ($current_language == 'en') {
                                        echo $cars_fleet['review_text_two_en'];

                                    } elseif ($current_language == 'ru') {
                                        echo $cars_fleet['review_text_two_ru'];
                                    } else {
                                        echo $cars_fleet['review_text_one_en'];
                                    }
                                endif;
                                ?>
                            </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review_item" data-aos="fade-up" data-aos-delay="350">
                            <div class="review_author">

                                <div class="review_author_info">
                                    <div class="review_author_name">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_name_three_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_name_three_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_name_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                    <div class="review_author_country">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_country_three_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_country_three_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_country_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <p class="review_text">
                                <?php
                                $cars_fleet = get_field('reviews');
                                if ($cars_fleet):
                                    $current_language = pll_current_language();
                                    if ($current_language == 'en') {
                                        echo $cars_fleet['review_text_three_en'];

                                    } elseif ($current_language == 'ru') {
                                        echo $cars_fleet['review_text_three_ru'];
                                    } else {
                                        echo $cars_fleet['review_text_one_en'];
                                    }
                                endif;
                                ?>
                            </p>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="review_item" data-aos="fade-up" data-aos-delay="350">
                            <div class="review_author">

                                <div class="review_author_info">
                                    <div class="review_author_name">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_name_four_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_name_four_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_name_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                    <div class="review_author_country">
                                        <?php
                                        $cars_fleet = get_field('reviews');
                                        if ($cars_fleet):
                                            $current_language = pll_current_language();
                                            if ($current_language == 'en') {
                                                echo $cars_fleet['review_author_country_four_en'];

                                            } elseif ($current_language == 'ru') {
                                                echo $cars_fleet['review_author_country_four_ru'];
                                            } else {
                                                echo $cars_fleet['review_author_country_one_en'];
                                            }
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <p class="review_text">
                                <?php
                                $cars_fleet = get_field('reviews');
                                if ($cars_fleet):
                                    $current_language = pll_current_language();
                                    if ($current_language == 'en') {
                                        echo $cars_fleet['review_text_four_en'];

                                    } elseif ($current_language == 'ru') {
                                        echo $cars_fleet['review_text_four_ru'];
                                    } else {
                                        echo $cars_fleet['review_text_one_en'];
                                    }
                                endif;
                                ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="swiper-pag">
                    <a class="swiper-prev">PREV</a>
                    <a class="swiper-next">NEXT</a>
                </div>
            </div>




            <a href="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo '/contact-us';

            } elseif ($current_language == 'ru') {
                echo '/ru/contact-us';
            } else {
                echo '/contact-us';
            }
            ?>" class="button leave-review" data-aos="fade-up" data-aos-delay="1000">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Leave a review';

                } elseif ($current_language == 'ru') {
                    echo 'Оставить отзыв';
                } else {
                    echo 'Leave a review';
                }
                ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
            </a>
        </div>
    </section>

    <section class="get_consultation container">
        <div class="get_consultation_inner">
            <div class="section_title" data-aos="fade-up" data-aos-delay="150">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Get professional consultation';

                } elseif ($current_language == 'ru') {
                    echo 'Получить профессиональную консультацию';
                } else {
                    echo 'Get professional consultation';
                }
                ?>
            </div>
            <div class="section_description" data-aos="fade-up" data-aos-delay="300">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Fill a form below and our consultant will contact you shortly';

                } elseif ($current_language == 'ru') {
                    echo 'Заполните форму ниже и наш консультант свяжется с вами в ближайшее время';
                } else {
                    echo 'Fill a form below and our consultant will contact you shortly';
                }
                ?>
            </div>
            <form method="POST" action="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'https://axluxurycars.ae/mailer';

            } elseif ($current_language == 'ru') {
                echo 'https://axluxurycars.ae/ru/mailer';
            } else {
                echo 'https://axluxurycars.ae/mailer';
            }
            ?>" class="get_consultation_form" data-aos="fade-up" data-aos-delay="450">
                <input required name="yourname" type="text" class="get_consultation_full_name" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Full Name';

                } elseif ($current_language == 'ru') {
                    echo 'Ваше имя';
                } else {
                    echo 'Full Name';
                }
                ?>" />
                <input required name="number" type="tel" class="get_consultation_phone_number" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Phone Number';

                } elseif ($current_language == 'ru') {
                    echo 'Номер телефона';
                } else {
                    echo 'Phone Number';
                }
                ?>" />
                <input required name="email" type="email" class="get_consultation_email" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Email';

                } elseif ($current_language == 'ru') {
                    echo 'Эл. почта';
                } else {
                    echo 'Email';
                }
                ?>" />
                <button class="button">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'SEND';

                    } elseif ($current_language == 'ru') {
                        echo 'ОТПРАВИТЬ';
                    } else {
                        echo 'SEND';
                    }
                    ?>
                </button>
            </form>
            <div class="contact_whatsapp" data-aos="fade-up" data-aos-delay="550">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Or contact us right now via';

                } elseif ($current_language == 'ru') {
                    echo 'Или напишите нам через';
                } else {
                    echo 'Or contact us right now via';
                }
                ?>
                <a href="https://wa.me/+971585893990">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/akar-icons_whatsapp-fill.svg"
                        alt="contact us right now via whatsapp" />
                    <span class="luxury">WHATSAPP</span>
                </a>
            </div>
        </div>
        <div class="lux_line container" data-aos="fade"></div>
    </section>

    <?php get_footer(); ?>
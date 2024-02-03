<?php get_header(); ?>
<main class="homepage_main">

    <section class="new_hero_section"
        style="background-image : url('<?php echo get_template_directory_uri(); ?>/img/hsection.jpg')">
        <div class="new_hero_content container">
            <h1 class="new_hero_title" >
                <?php the_title(); ?>
            </h1>
            <div class="hero_subtitle" >
                <?php the_content(); ?>
            </div>

            <div class="main_buttons">


                <a href="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo '/buy_a_car';

                } elseif ($current_language == 'ru') {
                    echo '/ru/buy_a_car';
                } else {
                    echo '/buy_a_car';
                }
                ?>" class="button"  >
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
                <a href="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo '/sell';

                } elseif ($current_language == 'ru') {
                    echo '/ru/sell';
                } else {
                    echo '/sell';
                }
                ?>" class="button"   style="">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'SELL YOUR CAR';

                    } elseif ($current_language == 'ru') {
                        echo 'Продать авто';
                    } else {
                        echo 'SELL YOUR CAR';
                    }
                    ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
                </a>

            </div>

        </div>

    </section>





    <section class="main_page_catalog">
        <div class="main_page_catalog_inner">
            <div class="section_title container" >
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
            <div class="section_description container" >
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



            <?php get_template_part('views/car_classes'); ?>
            
        </div>
    </section>


    <section class="cta_section container">

        <div class="cta_section_left"  >
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

            <div class="section_title"  >
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
            <div class="section_description" >


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
        <div class="section_subtitle luxury" >


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
        <div class="section_title" >
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
            <div class="info_cards_card" >
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
            <div class="info_cards_card"  >

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
            <div class="info_cards_card"  >
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


    <?php get_template_part('views/all_car_brands'); ?>


    <section class="how_it_works container">
        <div class="section_subtitle luxury" >
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
        <div class="section_title"  >
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
        <div class="section_description"  >
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
        <div class="info_cards"  >
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

            <div class="section_title"  >
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
            <div class="section_description" >


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
            <a class="mainform button"  >
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


        <div class="cta_two_section_right"  >
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
            <div class="section_title"  >
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
                        <div class="review_item"  >
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
                        <div class="review_item"  >
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
                        <div class="review_item"  >
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
                        <div class="review_item"  >
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
            ?>" class="button leave-review">
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
            <div class="section_title"  >
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
            <div class="section_description" >
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
            <form  method="POST" action="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo home_url('/mailer');

            } elseif ($current_language == 'ru') {
                echo 'https://axluxurycars.ae/ru/mailer';
            } else {
                echo home_url('/mailer');
            }
            ?>" class="get_consultation_form"  >
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


                <button class="button new">
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
            <div class="contact_whatsapp"  >
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
        <div class="lux_line container" ></div>
    </section>

    <?php get_footer(); ?>
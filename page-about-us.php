<?php get_header(); ?>
<section class="page_title"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/About-us.webp)">
    <div class="page_title_block">
        <h1 class="page_title_text">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'About us';

            } elseif ($current_language == 'ru') {
                echo 'О нас';
            } else {
                echo 'About us';
            }
            ?>
        </h1>
        <div class="breadcrums">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo '<span><a href="/">Home</a></span>
              <span>About us</span>';

            } elseif ($current_language == 'ru') {
                echo '<span><a href="/ru/">Главная</a></span>
              <span>О нас</span>';
            } else {
                echo '<span>Home</span>
              <span>About us</span>';
            }
            ?>
        </div>
    </div>
    <div class="background_overlay"></div>
</section>








<section class="how_it_works container">
    <div class="section_subtitle luxury">
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
    <div class="section_title">
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
    <div class="section_description">
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
    <div class="info_cards">
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

    <div class="cta_section_left">
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

        <div class="section_title">
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
        <div class="section_description">


            <div class="tabs">
                <div class="tab active">BUY</div>
                <div class="tab">SELL</div>
                <div class="tab">TRADING</div>
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
        <a href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy';
        } else {
            echo '/buy-a-car';
        }
        ?>" class="button">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'DISCOVER MORE';

            } elseif ($current_language == 'ru') {
                echo 'УЗНАТЬ БОЛЬШЕ';
            } else {
                echo 'DISCOVER MORE';
            }
            ?>

            <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
        </a>
    </div>

</section>

<section class="cta_section container">

    <div class="cta_two_section_left">

        <div class="section_title">
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
        <div class="section_description">


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
        <a href="<?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo '/buy';

        } elseif ($current_language == 'ru') {
            echo '/ru/buy';
        } else {
            echo '/buy-a-car';
        }
        ?>" class="button">
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


    <div class="cta_two_section_right">
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


<?php
if ($env == 'prod') {
    get_template_part('views/all_car_brands_no_filter', null, []);
} else {
    get_template_part('views/all_car_brands', null, []);
}
?>

<section class="reviews_section">
    <div class="reviews_inner container">
        <div class="section_title">
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
                    <div class="review_item">
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
                    <div class="review_item">
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
                    <div class="review_item">
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
                    <div class="review_item">
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



<?php get_footer(); ?>
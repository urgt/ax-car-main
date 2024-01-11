<?php get_header(); ?>
<section class="page_title" style="background-image: url(<?php echo get_template_directory_uri(); ?>2/img/1221.png)">
    <div class="page_title_block">
        <div class="page_title_text" data-aos="fade-up" data-aos-delay="100">
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
        </div>
        <div class="breadcrums" data-aos="fade-up" data-aos-delay="200">
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

<section class="about_ax_cars">
    <div class="about_ax_cars_content container">
        <div class="about_ax_cars_content_left"></div>
        <div class="about_ax_cars_content_right">
            <div class="about_ax_cars_content_top">
                <div class="section_subtitle luxury" data-aos="fade-up" data-aos-delay="300">
                    <?php
                    $top_cars = get_field('top_cars');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['section_subtitle_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['section_subtitle_ru'];
                        } else {
                            echo $top_cars['section_subtitle_en'];
                        }
                    endif;
                    ?>
                </div>
                <div class="section_title" data-aos="fade-up" data-aos-delay="400">
                    <?php
                    $top_cars = get_field('top_cars');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['section_title_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['section_title_ru'];
                        } else {
                            echo $top_cars['tsection_title_en'];
                        }
                    endif;
                    ?>
                </div>
                <div class="section_description" data-aos="fade-up" data-aos-delay="500">
                    <?php
                    $top_cars = get_field('top_cars');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['section_description_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['section_description_ru'];
                        } else {
                            echo $top_cars['section_description_en'];
                        }
                    endif;
                    ?>
                </div>
            </div>
            <div class="about_ax_cars_content_bottom">
                <div class="about_ax_cars_content_bottom_card" data-aos="fade-up" data-aos-delay="600">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gnew.svg" alt="Quick response" />
                    <div class="about_ax_cars_content_bottom_card_title">
                        <?php
                        $top_cars = get_field('top_cars');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['quick_response_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['quick_response_ru'];
                            } else {
                                echo $top_cars['quick_response_en'];
                            }
                        endif;
                        ?>
                    </div>
                    <p class="about_ax_cars_content_bottom_card_description">
                        <?php
                        $top_cars = get_field('top_cars');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['quick_response_desc_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['quick_response_desc_ru'];
                            } else {
                                echo $top_cars['quick_response_desc_en'];
                            }
                        endif;
                        ?>
                    </p>
                </div>
                <div class="about_ax_cars_content_bottom_card" data-aos="fade-up" data-aos-delay="800">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fast.svg" alt="Fast delivery" />
                    <div class="about_ax_cars_content_bottom_card_title">
                        <?php
                        $top_cars = get_field('top_cars');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['fast_delivery_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['fast_delivery_ru'];
                            } else {
                                echo $top_cars['fast_delivery_en'];
                            }
                        endif;
                        ?>
                    </div>
                    <p class="about_ax_cars_content_bottom_card_description">
                        <?php
                        $top_cars = get_field('top_cars');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['fast_delivery_desc_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['fast_delivery_desc_ru'];
                            } else {
                                echo $top_cars['fast_delivery_desc_en'];
                            }
                        endif;
                        ?>
                    </p>
                </div>
                <div class="about_ax_cars_content_bottom_card" data-aos="fade-up" data-aos-delay="1000">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/any loc.svg" alt="Any location" />
                    <div class="about_ax_cars_content_bottom_card_title">
                        <?php
                        $top_cars = get_field('top_cars');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['any_location_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['any_location_ru'];
                            } else {
                                echo $top_cars['any_location_en'];
                            }
                        endif;
                        ?>
                    </div>
                    <p class="about_ax_cars_content_bottom_card_description">
                        <?php
                        $top_cars = get_field('top_cars');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['any_location_desc_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['any_location_desc_ru'];
                            } else {
                                echo $top_cars['any_location_desc_en'];
                            }
                        endif;
                        ?>
                    </p>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/Fotoju-min.png" alt="Top cars for you"
                class="mobile_foto container" />
        </div>
    </div>
</section>

<section class="how_it_works container">
    <div class="section_subtitle luxury" data-aos="fade-up" data-aos-delay="100">
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
    <div class="section_title" data-aos="fade-up" data-aos-delay="250">
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
    </div>

    <div class="info_cards" data-aos="fade-up" data-aos-delay="500">
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Locationone9.svg" alt="Quick response" />
            <div class="info_cards_card_title">
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
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/onl.svg" alt="Quick response" />
            <div class="info_cards_card_title">
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
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kingd.svg" alt="Quick response" />
            <div class="info_cards_card_title">
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
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Locationone7.svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $cars_fleet = get_field('how_it_works');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['full_insurance_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['full_insurance_ru'];
                    } else {
                        echo $cars_fleet['full_insurance_en'];
                    }
                endif;
                ?>
            </div>
            <p class="info_cards_card_description">
                <?php
                $cars_fleet = get_field('how_it_works');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['full_insurance_is_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['full_insurance_is_ru'];
                    } else {
                        echo $cars_fleet['full_insurance_is_en'];
                    }
                endif;
                ?>
            </p>
        </div>
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame 37696.svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $cars_fleet = get_field('how_it_works');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['minimum_age_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['minimum_age_ru'];
                    } else {
                        echo $cars_fleet['minimum_age_en'];
                    }
                endif;
                ?>
            </div>
            <p class="info_cards_card_description">
                <?php
                $cars_fleet = get_field('how_it_works');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['you_need_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['you_need_ru'];
                    } else {
                        echo $cars_fleet['you_need_en'];
                    }
                endif;
                ?>
            </p>
        </div>
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Location (5).svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $cars_fleet = get_field('how_it_works');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['well-maintained_cars_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['well-maintained_cars_ru'];
                    } else {
                        echo $cars_fleet['well-maintained_cars_en'];
                    }
                endif;
                ?>
            </div>
            <p class="info_cards_card_description">
                <?php
                $cars_fleet = get_field('how_it_works');
                if ($cars_fleet):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $cars_fleet['only_clean_en'];

                    } elseif ($current_language == 'ru') {
                        echo $cars_fleet['only_clean_ru'];
                    } else {
                        echo $cars_fleet['only_clean_en'];
                    }
                endif;
                ?>
            </p>
        </div>
    </div>
</section>

<section class="logos_section">
    <img data-aos="fade-up" data-aos-delay="50" src="<?php echo get_template_directory_uri(); ?>/img/Group.svg"
        alt="Ax cars Porsche" />
    <img data-aos="fade-up" data-aos-delay="150" src="<?php echo get_template_directory_uri(); ?>/img/Vector.svg"
        alt="Ax cars Mercedes Benz" />
    <img data-aos="fade-up" data-aos-delay="250" src="<?php echo get_template_directory_uri(); ?>/img/bentley.svg"
        alt="Ax cars Bentley" />
    <img data-aos="fade-up" data-aos-delay="350" src="<?php echo get_template_directory_uri(); ?>/img/Group 37565.svg"
        alt="Ax cars BMW" />
    <img data-aos="fade-up" data-aos-delay="450" src="<?php echo get_template_directory_uri(); ?>/img/Lamborghini.svg"
        alt="Ax cars Lamborghini" />
    <img data-aos="fade-up" data-aos-delay="550" src="<?php echo get_template_directory_uri(); ?>/img/Vector_Logo.svg"
        alt="Ax cars Rolls Roys" />
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
        <div class="reviews_block">
            <div class="review_item" data-aos="fade-up" data-aos-delay="350">
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
            </div>
            <div class="review_item" data-aos="fade-up" data-aos-delay="500">
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
                            echo $cars_fleet['review_text_two_en'];
                        }
                    endif;
                    ?>
                </p>
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
                                    echo $cars_fleet['review_author_name_two_en'];
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
                                    echo $cars_fleet['review_author_country_two_en'];
                                }
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review_item" data-aos="fade-up" data-aos-delay="650">
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
                            echo $cars_fleet['review_text_three_en'];
                        }
                    endif;
                    ?>
                </p>
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
                                    echo $cars_fleet['review_author_name_three_en'];
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
                                    echo $cars_fleet['review_author_country_three_en'];
                                }
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review_item" data-aos="fade-up" data-aos-delay="800">
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
                            echo $cars_fleet['review_text_four_en'];
                        }
                    endif;
                    ?>
                </p>
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
                                    echo $cars_fleet['review_author_name_four_en'];
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
                                    echo $cars_fleet['review_author_country_four_en'];
                                }
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
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
        ?>" class="button" data-aos="fade-up" data-aos-delay="1000">
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

<?php get_footer() ?>
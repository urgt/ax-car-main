<?php get_header(); ?>
<main>
    <section class="page_title"
        style="background-image: url(https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Sectiondd-min.jpeg)">
        <div class="page_title_block">
            <div class="page_title_text" data-aos="fade-up" data-aos-delay="100">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Buy a car';

                } elseif ($current_language == 'ru') {
                    echo 'Купить авто';
                } else {
                    echo 'Buy a car';
                }
                ?>
            </div>
            <div class="breadcrums" data-aos="fade-up" data-aos-delay="200">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo '<span>Home</span>
              <span>Buy a car</span>';

                } elseif ($current_language == 'ru') {
                    echo '<span>Главная</span>
              <span>Купить авто</span>';
                } else {
                    echo '<span>Home</span>
              <span>Buy a car</span>';
                }
                ?>
            </div>
        </div>
        <div class="background_overlay"></div>
    </section>

    <section class="buy_a_car_form container">
        <div class="section_title" data-aos="fade-up" data-aos-delay="300">
            <h2>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    $cars_fleet = get_field('section_title_en');
                    echo $cars_fleet;

                } elseif ($current_language == 'ru') {
                    $cars_fleet = get_field('section_title_ru');
                    echo $cars_fleet;
                } else {
                    $cars_fleet = get_field('section_title_en');
                    echo $cars_fleet; // Вывод значения по умолчанию
                }
                ?>
            </h2>
        </div>
        <div class="section_description" data-aos="fade-up" data-aos-delay="450">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                $cars_fleet = get_field('section_description_en');
                echo $cars_fleet;

            } elseif ($current_language == 'ru') {
                $cars_fleet = get_field('section_description_ru');
                echo $cars_fleet;
            } else {
                $cars_fleet = get_field('section_description_en');
                echo $cars_fleet; // Вывод значения по умолчанию
            }
            ?>
        </div>
        <div class="buy_a_car_form_wrapper">

            <form class="get_consultation_form" data-aos="fade-up" data-aos-delay="600" method="POST" action="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo home_url('/mailer');

            } elseif ($current_language == 'ru') {
                echo 'https://axluxurycars.ae/ru/mailer';
            } else {
                echo home_url('/mailer');
            }
            ?>">
                <input required name="yourname" type="text" class="get_consultation_first_name" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'First Name';

                } elseif ($current_language == 'ru') {
                    echo 'Ваше имя';
                } else {
                    echo 'First Name';
                }
                ?>" />
                <input required name="lastname" type="text" class="get_consultation_last_name" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Last Name';

                } elseif ($current_language == 'ru') {
                    echo 'Фамилия';
                } else {
                    echo 'Last Name';
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
                    echo 'Электронная почта';
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
                        echo 'Отправить';
                    } else {
                        echo 'SEND';
                    }
                    ?>
                </button>
            </form>
            <div class="contact_whatsapp" data-aos="fade-up" data-aos-delay="600">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Or contact us right now via';

                } elseif ($current_language == 'ru') {
                    echo 'Или свяжитесь с нами через';
                } else {
                    echo 'Or contact us right now via';
                }
                ?>
                <a href="https://wa.me/+971556702309">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/akar-icons_whatsapp-fill.svg"
                        alt="contact us right now via whatsapp" />
                    <span class="luxury">WHATSAPP</span>
                </a>
            </div>
        </div>
    </section>

    <section class="how_it_works container">
        <div class="section_subtitle luxury" data-aos="fade-up" data-aos-delay="100">
            <?php
            $top_cars = get_field('how_it_works_two');
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
        <div class="section_title" data-aos="fade-up" data-aos-delay="250">
            <?php
            $top_cars = get_field('how_it_works_two');
            if ($top_cars):
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo $top_cars['section_title_en'];

                } elseif ($current_language == 'ru') {
                    echo $top_cars['section_title_ru'];
                } else {
                    echo $top_cars['section_title_en'];
                }
            endif;
            ?>
        </div>

        <div class="info_cards" data-aos="fade-up" data-aos-delay="400">
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Location (1).svg" alt="Quick response" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('how_it_works_two');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['learn_conditions_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['learn_conditions_ru'];
                        } else {
                            echo $top_cars['learn_conditions_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('how_it_works_two');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['read_the_terms_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['read_the_terms_ru'];
                        } else {
                            echo $top_cars['read_the_terms_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Location (2).svg" alt="Quick response" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('how_it_works_two');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['choose_a_car_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['choose_a_car_ru'];
                        } else {
                            echo $top_cars['choose_a_car_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('how_it_works_two');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['choose_from_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['choose_from_ru'];
                        } else {
                            echo $top_cars['choose_from_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Locationono.svg" alt="Quick response" />
                <div class="info_cards_card_title">
                    <?php
                    $top_cars = get_field('how_it_works_two');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['fill_in_the_form_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['fill_in_the_form_ru'];
                        } else {
                            echo $top_cars['fill_in_the_form_en'];
                        }
                    endif;
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $top_cars = get_field('how_it_works_two');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['complete_the_form_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['complete_the_form_ru'];
                        } else {
                            echo $top_cars['complete_the_form_en'];
                        }
                    endif;
                    ?>
                </p>
            </div>
        </div>
    </section>


    <section class="steps_buy_car container" style="display:none;">
        <div class="section_subtitle luxury" data-aos="fade-up" data-aos-delay="100">
            <?php
            $top_cars = get_field('how_it_works');
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
        <div class="section_title" data-aos="fade-up" data-aos-delay="250">
            <?php
            $top_cars = get_field('how_it_works');
            if ($top_cars):
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo $top_cars['section_title_en'];

                } elseif ($current_language == 'ru') {
                    echo $top_cars['section_title_ru'];
                } else {
                    echo $top_cars['section_title_en'];
                }
            endif;
            ?>
        </div>

        <div class="steps_text" data-aos="fade-up" data-aos-delay="400">
            <div class="steps_text_block">
                <div class="section_title">
                    <?php
                    $top_cars = get_field('how_it_works');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['easy_steps_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['easy_steps_ru'];
                        } else {
                            echo $top_cars['easy_steps_en'];
                        }
                    endif;
                    ?>
                </div>
                <div class="section_description">
                    <?php
                    $top_cars = get_field('how_it_works');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['you_can_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['you_can_ru'];
                        } else {
                            echo $top_cars['you_can_en'];
                        }
                    endif;
                    ?>
                </div>
            </div>
            <div class="steps_text_block">
                <div class="steps_text_top">
                    <div class="number">01</div>
                    <p>
                        <?php
                        $top_cars = get_field('how_it_works');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['number_one_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['number_one_ru'];
                            } else {
                                echo $top_cars['number_one_en'];
                            }
                        endif;
                        ?>
                    </p>
                </div>
                <hr />
                <div class="section_description">
                    <?php
                    $top_cars = get_field('how_it_works');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['number_one_desc_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['number_one_desc_ru'];
                        } else {
                            echo $top_cars['number_one_desc_en'];
                        }
                    endif;
                    ?>
                </div>
            </div>
            <div class="steps_text_block">
                <div class="steps_text_top">
                    <div class="number">02</div>
                    <p>
                        <?php
                        $top_cars = get_field('how_it_works');
                        if ($top_cars):
                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo $top_cars['number_two_en'];

                            } elseif ($current_language == 'ru') {
                                echo $top_cars['number_two_ru'];
                            } else {
                                echo $top_cars['number_two_en'];
                            }
                        endif;
                        ?>
                    </p>
                </div>
                <hr />
                <div class="section_description">
                    <?php
                    $top_cars = get_field('how_it_works');
                    if ($top_cars):
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo $top_cars['number_two_desc_en'];

                        } elseif ($current_language == 'ru') {
                            echo $top_cars['number_two_desc_ru'];
                        } else {
                            echo $top_cars['number_two_desc_en'];
                        }
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>




    <?php get_footer() ?>
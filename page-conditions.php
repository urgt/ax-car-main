<?php get_header(); ?>
<section class="page_title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/1221.jpg)">
    <div class="page_title_block">
        <div class="page_title_text" >
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'Conditions';

            } elseif ($current_language == 'ru') {
                echo 'Условия';
            } else {
                echo 'Conditions';
            }
            ?>
        </div>
        <div class="breadcrums"  >
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo '<span><a href="/">Home</a></span>
              <span>Conditions</span>';

            } elseif ($current_language == 'ru') {
                echo '<span><a href="/ru/">Главная</a></span>
              <span>Условия</span>';
            } else {
                echo '<span>Home</span>
              <span>Conditions</span>';
            }
            ?>
        </div>
    </div>
    <div class="background_overlay"></div>
</section>
<section class="how_it_works container">
    <div class="section_subtitle luxury" >
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            $cars_fleet = get_field('section_subtitle_en');
            echo $cars_fleet;

        } elseif ($current_language == 'ru') {
            $cars_fleet = get_field('section_subtitle_ru');
            echo $cars_fleet;
        } else {
            $cars_fleet = get_field('section_subtitle_en');
            echo $cars_fleet; // Вывод значения по умолчанию
        }
        ?>
    </div>
    <div class="section_title"  >
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
    </div>
    <div class="section_description"  >
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
    <div class="info_cards"  >
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Locationone9.svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $top_cars = get_field('info_cards');
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
                $top_cars = get_field('info_cards');
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/onl.svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $top_cars = get_field('info_cards');
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
                $top_cars = get_field('info_cards');
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/kingd.svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $top_cars = get_field('info_cards');
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
                $top_cars = get_field('info_cards');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['complete_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['complete_ru'];
                    } else {
                        echo $top_cars['complete_en'];
                    }
                endif;
                ?>
            </p>
        </div>
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Locationone7.svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $top_cars = get_field('info_cards');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['full_insurance_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['full_insurance_ru'];
                    } else {
                        echo $top_cars['full_insurance_en'];
                    }
                endif;
                ?>
            </div>
            <p class="info_cards_card_description">
                <?php
                $top_cars = get_field('info_cards');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['full_insurance_is_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['full_insurance_is_ru'];
                    } else {
                        echo $top_cars['full_insurance_is_en'];
                    }
                endif;
                ?>
            </p>
        </div>
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Frame 37696.svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $top_cars = get_field('info_cards');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['minimum_age_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['minimum_age_ru'];
                    } else {
                        echo $top_cars['minimum_age_en'];
                    }
                endif;
                ?>
            </div>
            <p class="info_cards_card_description">
                <?php
                $top_cars = get_field('info_cards');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['you_need_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['you_need_ru'];
                    } else {
                        echo $top_cars['you_need_en'];
                    }
                endif;
                ?>
            </p>
        </div>
        <div class="info_cards_card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Location (5).svg" alt="Quick response" />
            <div class="info_cards_card_title">
                <?php
                $top_cars = get_field('info_cards');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['well-maintained_cars_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['well-maintained_cars_ru'];
                    } else {
                        echo $top_cars['well-maintained_cars_en'];
                    }
                endif;
                ?>
            </div>
            <p class="info_cards_card_description">
                <?php
                $top_cars = get_field('info_cards');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['only_clean_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['only_clean_ru'];
                    } else {
                        echo $top_cars['only_clean_en'];
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
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Brokerage services';

                } elseif ($current_language == 'ru') {
                    echo 'Брокерские услуги';
                } else {
                    echo 'Brokerage services';
                }
                ?>

            </h2>
        </div>
        <div class="section_description" >
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'Our team is committed to ensuring your satisfaction by handling all aspects of the purchase for you. From finding the perfect vehicle to negotiating the best price and handling all the paperwork, let us take care of everything for you. ';

            } elseif ($current_language == 'ru') {
                echo 'Наша команда стремится обеспечить ваше удовлетворение, обрабатывая все аспекты покупки за вас. От поиска идеального автомобиля до переговоров о лучшей цене и оформления всех документов — позвольте нам позаботиться обо всем за вас. Благодаря нашему обширному знанию рынка и нашей сети надежных дилеров и покупателей, мы гарантируем плавную и беспроблемную сделку.';
            } else {
                echo 'Our team is committed to ensuring your satisfaction by handling all aspects of the purchase for you. From finding the perfect vehicle to negotiating the best price and handling all the paperwork, let us take care of everything for you. ';
            }
            ?>

        </div>
        <a  class="mainform button"  >
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





<section class="how_we_work_section container">


    <div class="section_title"  >How we work</div>

    <div class="how_we_work_numbers">

        <div class="how_we_work_number">
            <div class="number">
                1
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Meet in person or online with our expert';

                } elseif ($current_language == 'ru') {
                    echo 'Встреча с нашим экспертом';
                } else {
                    echo 'Meet in person or online with our expert';
                }
                ?>
            </div>
        </div>

        <div class="how_we_work_number">
            <div class="number">
                2
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Sourcing your preferred used luxury car worldwide';

                } elseif ($current_language == 'ru') {
                    echo 'Поиск автомобиля по вашим предпочтениям';
                } else {
                    echo 'Sourcing your preferred used luxury car worldwide';
                }
                ?>
            </div>
        </div>

        <div class="how_we_work_number">
            <div class="number">
                3
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Proposal preparation with Pre-Purchased Inspection Report';

                } elseif ($current_language == 'ru') {
                    echo 'Подготовка предложения с отчетом об автомобиле';
                } else {
                    echo 'Proposal preparation with Pre-Purchased Inspection Report';
                }
                ?>
            </div>
        </div>

        <div class="how_we_work_number">
            <div class="number">
                4
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Signing of contract and issuing the Invoice';

                } elseif ($current_language == 'ru') {
                    echo 'Подписание договора и выставление счета-фактуры';
                } else {
                    echo 'Signing of contract and issuing the Invoice';
                }
                ?>
            </div>
        </div>


        <div class="how_we_work_number">
            <div class="number">
                5
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Full payment';

                } elseif ($current_language == 'ru') {
                    echo 'Полная оплата';
                } else {
                    echo 'Full payment';
                }
                ?>
            </div>
        </div>

        <div class="how_we_work_number">
            <div class="number">
                6
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Shipping your car from origin to UAE';

                } elseif ($current_language == 'ru') {
                    echo 'Доставка автомобиля в ОАЭ';
                } else {
                    echo 'Shipping your car from origin to UAE';
                }
                ?>
            </div>
        </div>

        <div class="how_we_work_number">
            <div class="number">
                7
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Delivery at your doorstep or preferred location';

                } elseif ($current_language == 'ru') {
                    echo 'Доставка автомобиля на дом или в предпочитаемое место';
                } else {
                    echo 'Delivery at your doorstep or preferred location';
                }
                ?>
            </div>
        </div>

        <div class="how_we_work_number">
            <div class="number">
                8
            </div>
            <div class="number_txt">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Car Registration Assistance';

                } elseif ($current_language == 'ru') {
                    echo 'Помощь в регистрации автомобиля';
                } else {
                    echo 'Car Registration Assistance';
                }
                ?>
            </div>
        </div>

    </div>

</section>




<section class="accordions_block container">
    <div class="faqs_block">

        <div class="section_title"  >
            <?php
            $top_cars = get_field('faqs_block');
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

    </div>
    <ul id="my-accordion" class="accordionjs" >
        <!-- Section 1 -->
        <li>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_titile_01_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_titile_01_ru'];
                    } else {
                        echo $top_cars['faq_titile_01_en'];
                    }
                endif;
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" fill="none">
                    <path
                        d="M1.69922 7.72961L7.66113 1.43079C7.79785 1.2843 7.86377 1.1134 7.85889 0.918091C7.854 0.722778 7.77832 0.556763 7.63184 0.420044C7.48535 0.283325 7.31445 0.217407 7.11914 0.22229C6.92383 0.227173 6.75781 0.302856 6.62109 0.449341L0.19043 7.23157C0.0634766 7.36829 0 7.53186 0 7.72229C0 7.91272 0.0634766 8.07629 0.19043 8.21301L6.62109 15.0099C6.68945 15.0782 6.77002 15.132 6.86279 15.171C6.95557 15.2101 7.0459 15.2296 7.13379 15.2296C7.22168 15.2296 7.30957 15.2125 7.39746 15.1783C7.48535 15.1442 7.56348 15.0929 7.63184 15.0245C7.77832 14.8976 7.854 14.734 7.85889 14.5338C7.86377 14.3336 7.79785 14.1652 7.66113 14.0284L1.69922 7.72961Z"
                        fill="black" />
                </svg>
            </div>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_description_01_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_description_01_ru'];
                    } else {
                        echo $top_cars['faq_description_01_en'];
                    }
                endif;
                ?>
            </div>
        </li>

        <!-- Section 2 -->
        <li>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_titile_02_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_titile_02_ru'];
                    } else {
                        echo $top_cars['faq_titile_02_en'];
                    }
                endif;
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" fill="none">
                    <path
                        d="M1.69922 7.72961L7.66113 1.43079C7.79785 1.2843 7.86377 1.1134 7.85889 0.918091C7.854 0.722778 7.77832 0.556763 7.63184 0.420044C7.48535 0.283325 7.31445 0.217407 7.11914 0.22229C6.92383 0.227173 6.75781 0.302856 6.62109 0.449341L0.19043 7.23157C0.0634766 7.36829 0 7.53186 0 7.72229C0 7.91272 0.0634766 8.07629 0.19043 8.21301L6.62109 15.0099C6.68945 15.0782 6.77002 15.132 6.86279 15.171C6.95557 15.2101 7.0459 15.2296 7.13379 15.2296C7.22168 15.2296 7.30957 15.2125 7.39746 15.1783C7.48535 15.1442 7.56348 15.0929 7.63184 15.0245C7.77832 14.8976 7.854 14.734 7.85889 14.5338C7.86377 14.3336 7.79785 14.1652 7.66113 14.0284L1.69922 7.72961Z"
                        fill="black" />
                </svg>
            </div>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_description_02_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_description_02_ru'];
                    } else {
                        echo $top_cars['faq_description_02_en'];
                    }
                endif;
                ?>
            </div>
        </li>

        <!-- Section 3 -->
        <li>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_titile_03_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_titile_03_ru'];
                    } else {
                        echo $top_cars['faq_titile_03_en'];
                    }
                endif;
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" fill="none">
                    <path
                        d="M1.69922 7.72961L7.66113 1.43079C7.79785 1.2843 7.86377 1.1134 7.85889 0.918091C7.854 0.722778 7.77832 0.556763 7.63184 0.420044C7.48535 0.283325 7.31445 0.217407 7.11914 0.22229C6.92383 0.227173 6.75781 0.302856 6.62109 0.449341L0.19043 7.23157C0.0634766 7.36829 0 7.53186 0 7.72229C0 7.91272 0.0634766 8.07629 0.19043 8.21301L6.62109 15.0099C6.68945 15.0782 6.77002 15.132 6.86279 15.171C6.95557 15.2101 7.0459 15.2296 7.13379 15.2296C7.22168 15.2296 7.30957 15.2125 7.39746 15.1783C7.48535 15.1442 7.56348 15.0929 7.63184 15.0245C7.77832 14.8976 7.854 14.734 7.85889 14.5338C7.86377 14.3336 7.79785 14.1652 7.66113 14.0284L1.69922 7.72961Z"
                        fill="black" />
                </svg>
            </div>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_description_03_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_description_03_ru'];
                    } else {
                        echo $top_cars['faq_description_03_en'];
                    }
                endif;
                ?>
            </div>
        </li>

        <li>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_titile_04_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_titile_04_ru'];
                    } else {
                        echo $top_cars['faq_titile_04_en'];
                    }
                endif;
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" fill="none">
                    <path
                        d="M1.69922 7.72961L7.66113 1.43079C7.79785 1.2843 7.86377 1.1134 7.85889 0.918091C7.854 0.722778 7.77832 0.556763 7.63184 0.420044C7.48535 0.283325 7.31445 0.217407 7.11914 0.22229C6.92383 0.227173 6.75781 0.302856 6.62109 0.449341L0.19043 7.23157C0.0634766 7.36829 0 7.53186 0 7.72229C0 7.91272 0.0634766 8.07629 0.19043 8.21301L6.62109 15.0099C6.68945 15.0782 6.77002 15.132 6.86279 15.171C6.95557 15.2101 7.0459 15.2296 7.13379 15.2296C7.22168 15.2296 7.30957 15.2125 7.39746 15.1783C7.48535 15.1442 7.56348 15.0929 7.63184 15.0245C7.77832 14.8976 7.854 14.734 7.85889 14.5338C7.86377 14.3336 7.79785 14.1652 7.66113 14.0284L1.69922 7.72961Z"
                        fill="black" />
                </svg>
            </div>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_description_04_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_description_04_ru'];
                    } else {
                        echo $top_cars['faq_description_04_en'];
                    }
                endif;
                ?>
            </div>
        </li>

        <!-- Section 2 -->
        <li>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_titile_05_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_titile_05_ru'];
                    } else {
                        echo $top_cars['faq_titile_05_en'];
                    }
                endif;
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" fill="none">
                    <path
                        d="M1.69922 7.72961L7.66113 1.43079C7.79785 1.2843 7.86377 1.1134 7.85889 0.918091C7.854 0.722778 7.77832 0.556763 7.63184 0.420044C7.48535 0.283325 7.31445 0.217407 7.11914 0.22229C6.92383 0.227173 6.75781 0.302856 6.62109 0.449341L0.19043 7.23157C0.0634766 7.36829 0 7.53186 0 7.72229C0 7.91272 0.0634766 8.07629 0.19043 8.21301L6.62109 15.0099C6.68945 15.0782 6.77002 15.132 6.86279 15.171C6.95557 15.2101 7.0459 15.2296 7.13379 15.2296C7.22168 15.2296 7.30957 15.2125 7.39746 15.1783C7.48535 15.1442 7.56348 15.0929 7.63184 15.0245C7.77832 14.8976 7.854 14.734 7.85889 14.5338C7.86377 14.3336 7.79785 14.1652 7.66113 14.0284L1.69922 7.72961Z"
                        fill="black" />
                </svg>
            </div>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_description_05_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_description_05_ru'];
                    } else {
                        echo $top_cars['faq_description_05_en'];
                    }
                endif;
                ?>
            </div>
        </li>

        <!-- Section 3 -->
        <li>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_titile_06_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_titile_06_ru'];
                    } else {
                        echo $top_cars['faq_titile_06_en'];
                    }
                endif;
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" fill="none">
                    <path
                        d="M1.69922 7.72961L7.66113 1.43079C7.79785 1.2843 7.86377 1.1134 7.85889 0.918091C7.854 0.722778 7.77832 0.556763 7.63184 0.420044C7.48535 0.283325 7.31445 0.217407 7.11914 0.22229C6.92383 0.227173 6.75781 0.302856 6.62109 0.449341L0.19043 7.23157C0.0634766 7.36829 0 7.53186 0 7.72229C0 7.91272 0.0634766 8.07629 0.19043 8.21301L6.62109 15.0099C6.68945 15.0782 6.77002 15.132 6.86279 15.171C6.95557 15.2101 7.0459 15.2296 7.13379 15.2296C7.22168 15.2296 7.30957 15.2125 7.39746 15.1783C7.48535 15.1442 7.56348 15.0929 7.63184 15.0245C7.77832 14.8976 7.854 14.734 7.85889 14.5338C7.86377 14.3336 7.79785 14.1652 7.66113 14.0284L1.69922 7.72961Z"
                        fill="black" />
                </svg>
            </div>
            <div>
                <?php
                $top_cars = get_field('faqs_block');
                if ($top_cars):
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo $top_cars['faq_description_06_en'];

                    } elseif ($current_language == 'ru') {
                        echo $top_cars['faq_description_06_ru'];
                    } else {
                        echo $top_cars['faq_description_06_en'];
                    }
                endif;
                ?>
            </div>
        </li>


    </ul>
</section>


<section class="buy_a_car_form container">
    <div class="section_title" >
        <h2>
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'BUYING A CAR ONLINE WITH DELIVERY';

            } elseif ($current_language == 'ru') {
                echo 'ПОКУПКА МАШИНЫ ОНЛАЙН С ДОСТАВКОЙ';
            } else {
                echo 'BUYING A CAR ONLINE WITH DELIVERY';
            }
            ?>
        </h2>
    </div>
    <div class="section_description"  >
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            echo "Let us know your preferences, and we'll handle the entire purchase process for you. Our team will find the right car, negotiate deals, and manage all the details, saving you time and ensuring a hassle-free experience.";

        } elseif ($current_language == 'ru') {
            echo 'Расскажите нашим агентам о предпочтениях при выборе машины, и мы освободим вас от хлопот. Команда займется покупкой авто, обсудит с вами все детали и доставит машину в любую точку Дубая. Это значительно сэкономит ваше время.';
        } else {
            echo "Let us know your preferences, and we'll handle the entire purchase process for you. Our team will find the right car, negotiate deals, and manage all the details, saving you time and ensuring a hassle-free experience.";
        }
        ?>
    </div>
    <div class="buy_a_car_form_wrapper">

        <form  class="get_consultation_form"   method="POST" action="<?php
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
            <div class="g-recaptcha" data-sitekey="6Lc_PWUpAAAAAEU1bdD82P_ezQPDXhK8rhT1HrBW"></div>

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
        <div class="contact_whatsapp"  >
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'Or contact us right now via';

            } elseif ($current_language == 'ru') {
                echo 'Cвяжитесь с нами через';
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
</section>


<?php get_footer() ?>
<?php get_header(); ?>
<main class="buy-archive__main">
    <section class="page_title"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/Buy-a-car.webp)">
        <div class="page_title_block">
            <h1 class="page_title_text">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Buy';

                } elseif ($current_language == 'ru') {
                    echo 'Купить авто';
                } else {
                    echo 'Buy';
                }
                ?>

            </h1>
            <div class="breadcrums">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo '<span><a href="/">Home</a></span>
              <span>Buy</span>';

                } elseif ($current_language == 'ru') {
                    echo '<span><a href="/ru/">Главная</a></span>
              <span>Купить авто</span>';
                } else {
                    echo '<span>Home</span>
              <span>Buy</span>';
                }
                ?>

            </div>
        </div>
        <div class="background_overlay"></div>
    </section>
    <section class="main_page_catalog">
        <div class="main_page_catalog_inner container">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo '<div class="section_subtitle luxury" 
				 >Our Collection</div>
            <div class="section_title" 
				><h1>Buy a car in Dubai</h1></div>
            ';

            } elseif ($current_language == 'ru') {
                echo '<div class="section_subtitle luxury" 
				 >Наша коллекция</div>
            <div class="section_title" 
				><h1>Элитные автомобили в Дубае</h1></div>
            ';
            } else {
                echo '<div class="section_subtitle luxury" 
				 >Our Collection</div>
            <div class="section_title" 
				><h1>Buy a car in Dubai</div>
            <div class="section_description" 
				 >
             Our experienced team offers personalized consultations, guiding you through the process and
             helping you find the right vehicle to meet your specific requirements for your comfort.
             </div>';
            }
            ?>

            <div class="section_description new_section_description">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Our experienced team offers personalized consultations, guiding you through the process and
             helping you find the right vehicle to meet your specific requirements for your comfort.';

                } elseif ($current_language == 'ru') {
                    echo 'Наша опытная команда предлагает индивидуальные консультации, сопровождая вас на протяжении всего процесса и помогая вам найти подходящий автомобиль, отвечающий вашим конкретным требованиям к вашему комфорту.';
                } else {
                    echo 'Our experienced team offers personalized consultations, guiding you through the process and
             helping you find the right vehicle to meet your specific requirements for your comfort.';
                } ?>

            </div>

            <?php 
                if ($env == 'prod') {                    
                    get_template_part('views/car_classes_nofilter', null, []);
                    get_template_part('views/car_brands_no_filter', null, []);

                } else {
                    get_template_part('views/filter', null, ['env' => $env]);
                }
            ?>



            <?php get_template_part('views/catalog'); ?>

        </div>
    </section>


    <section class="buy_a_car_form container">
        <div class="section_title">
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
        <div class="section_description">
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

            <form class="get_consultation_form" method="POST" action="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo home_url('/mailer');

            } elseif ($current_language == 'ru') {
                echo 'https://axmotors.ae/ru/mailer';
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
            <div class="contact_whatsapp">
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

    <section class="how_it_works container">
        <div class="section_subtitle luxury">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'HOW IT WORKS';

            } elseif ($current_language == 'ru') {
                echo 'КАК ЭТО РАБОТАЕТ';
            } else {
                echo 'HOW IT WORKS';
            }
            ?>
        </div>
        <div class="section_title">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'QUICK CAR BUY IN DUBAI';

            } elseif ($current_language == 'ru') {
                echo 'БЫСТРАЯ ПОКУПКА МАШИНЫ В ДУБАЕ';
            } else {
                echo 'QUICK CAR BUY IN DUBAI';
            }
            ?>
        </div>

        <div class="info_cards">
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Location (1).svg" alt="Quick response" />
                <div class="info_cards_card_title">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'Choose your car';

                    } elseif ($current_language == 'ru') {
                        echo 'Выберите автомобиль';
                    } else {
                        echo 'Choose your car';
                    }
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'Decide what car you want to buy. If we do not have it in our fleet, we will order it for you';

                    } elseif ($current_language == 'ru') {
                        echo 'Решите, какую машину хотите купить, а мы закажем ее и доставим вам';
                    } else {
                        echo 'Decide what car you want to buy. If we do not have it in our fleet, we will order it for you';
                    }
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Location (2).svg" alt="Quick response" />
                <div class="info_cards_card_title">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'Make a contract';

                    } elseif ($current_language == 'ru') {
                        echo 'Заключите договор';
                    } else {
                        echo 'Make a contract';
                    }
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'Sign the purchase contract and make a payment for the car';

                    } elseif ($current_language == 'ru') {
                        echo 'Подпишите договор купли-продажи и оплатите автомобиль';
                    } else {
                        echo 'Sign the purchase contract and make a payment for the car';
                    }
                    ?>
                </p>
            </div>
            <div class="info_cards_card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Locationono.svg" alt="Quick response" />
                <div class="info_cards_card_title">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'Get the car';

                    } elseif ($current_language == 'ru') {
                        echo 'Получите автомобиль';
                    } else {
                        echo 'Get the car';
                    }
                    ?>
                </div>
                <p class="info_cards_card_description">
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'Recieve the documents and pick up the car';

                    } elseif ($current_language == 'ru') {
                        echo 'Получите документы и заберите автомобиль';
                    } else {
                        echo 'Recieve the documents and pick up the car';
                    }
                    ?>
                </p>
            </div>
        </div>
    </section>


    <section class="steps_buy_car container" style="display:none;">
        <div class="section_subtitle luxury">
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
        <div class="section_title">
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

        <div class="steps_text">
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
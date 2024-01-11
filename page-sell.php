<?php get_header(); ?>

<main>
    <section class="page_title"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/sell_back-min.jpeg)">
        <div class="page_title_block">
            <div class="page_title_text" data-aos="fade-up" data-aos-delay="100">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'SELL';

                } elseif ($current_language == 'ru') {
                    echo 'Продать авто';
                } else {
                    echo 'SELL';
                }
                ?>
            </div>
            <div class="breadcrums" data-aos="fade-up" data-aos-delay="200">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo '<span>Home</span>
              <span>Sell</span>';

                } elseif ($current_language == 'ru') {
                    echo '<span>Главная</span>
              <span>Продать авто</span>';
                } else {
                    echo '<span>Home</span>
              <span>Sell a car</span>';
                }
                ?>
            </div>
        </div>
        <div class="background_overlay"></div>
    </section>

    <div class="section_description container sell_page" data-aos="fade-up" data-aos-delay="450">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
            $cars_fleet = get_field('page_description_en');
            echo $cars_fleet;

        } elseif ($current_language == 'ru') {
            $cars_fleet = get_field('page_description_ru');
            echo $cars_fleet;
        } else {
            $cars_fleet = get_field('page_description_en');
            echo $cars_fleet; // Вывод значения по умолчанию
        }
        ?>
    </div>


    <section class="buy_a_car_form container sell_page">
        <div class="sell_car_form_section">
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


            <div class="info_cards sell_page" data-aos="fade-up" data-aos-delay="400">
                <div class="info_cards_card ">
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
        </div>


        <div class="buy_a_car_form_wrapper">

            <div class="section_title" data-aos="fade-up" data-aos-delay="300">
                <h2>
                    <?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        $cars_fleet = get_field('form_title_en');
                        echo $cars_fleet;

                    } elseif ($current_language == 'ru') {
                        $cars_fleet = get_field('form_title_ru');
                        echo $cars_fleet;
                    } else {
                        $cars_fleet = get_field('form_title_en');
                        echo $cars_fleet; // Вывод значения по умолчанию
                    }
                    ?>
                </h2>
            </div>
            <div class="section_description" data-aos="fade-up" data-aos-delay="450">
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    $cars_fleet = get_field('form_description_en');
                    echo $cars_fleet;

                } elseif ($current_language == 'ru') {
                    $cars_fleet = get_field('form_description_ru');
                    echo $cars_fleet;
                } else {
                    $cars_fleet = get_field('form_description_en');
                    echo $cars_fleet; // Вывод значения по умолчанию
                }
                ?>
            </div>


            <form class="get_consultation_form sell_car_form" data-aos="fade-up" data-aos-delay="600" method="POST"
                action="" enctype="multipart/form-data">
                <div class="loader_form_wrap">
                    <div data-role="activity" data-type="cycle" data-style="color"></div>
                </div>

                <select class="js-example-basic-single" name="sell_brand" id="sell_brand" class="sell_form_brand">
                    <option value="other" disabled selected>Brand</option>
                        <?php
                        // Array of car brands
                        $car_brands = array("Acura", "Alfa Romeo", "Aston Martin", "Audi", "BMW", "BYD", "Bentley", "Bugatti", "Buick", "Cadillac", "Chevrolet", "Chrysler", "Daewoo", "Dodge", "Ferrari", "Fiat", "Ford", "GMC", "General Motors", "Genesis", "Honda", "Hummer", "Hyundai", "Infiniti", "Isuzu", "Jaguar", "Jeep", "Kia", "Koenigsegg", "Lamborghini", "Land Rover", "Lexus", "Lincoln", "Lotus", "MINI", "Maserati", "Maybach", "Mazda", "McLaren", "Mercedes-Benz", "Mitsubishi", "Nissan", "GMC", "Pagani", "Peugeot", "Plymouth", "Pontiac", "Porsche", "Renault", "Rolls-Royce", "Smart", "Subaru", "Suzuki", "Tesla", "Toyota", "Volkswagen", "Volvo");


                        // Loop through the array to generate options
                        foreach ($car_brands as $brand) {
                            echo '<option value="' . esc_attr($brand) . '">' . esc_html($brand) . '</option>';
                        }
                        ?>
                </select>

                <input required name="sell_model" type="text" id="sell_model" class="sell_form_model" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Model';

                } elseif ($current_language == 'ru') {
                    echo 'Модель';
                } else {
                    echo 'Model';
                }
                ?>" />
                <input required name="sell_year" type="number" id="sell_year" min="0" step="1" class="sell_form_year" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Year of issue';

                } elseif ($current_language == 'ru') {
                    echo 'Год выпуска';
                } else {
                    echo 'Year of issue';
                }
                ?>" />
                <input required name="sell_mileage" type="number" id="sell_mileage" min="0" step="1" class="sell_form_mileage"
                    placeholder="<?php
                    $current_language = pll_current_language();
                    if ($current_language == 'en') {
                        echo 'Mileage';

                    } elseif ($current_language == 'ru') {
                        echo 'Год выпуска';
                    } else {
                        echo 'Mileage';
                    }
                    ?>" />
                <input required name="sell_price" type="text" id="sell_price" class="sell_form_price" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Price';

                } elseif ($current_language == 'ru') {
                    echo 'Цена';
                } else {
                    echo 'Price';
                }
                ?>" />
                <input required name="sell_name" type="text" id="sell_name" class="sell_form_name" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Name';

                } elseif ($current_language == 'ru') {
                    echo 'Имя';
                } else {
                    echo 'Name';
                }
                ?>" />
                <input required name="sell_phone" type="tel" id="sell_phone" class="sell_form_tel" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Phone Number';

                } elseif ($current_language == 'ru') {
                    echo 'Номер телефона';
                } else {
                    echo 'Phone Number';
                }
                ?>" />
                <input required name="sell_email" type="email" id="sell_email" class="sell_form_email" placeholder="<?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    echo 'Email';

                } elseif ($current_language == 'ru') {
                    echo 'Email';
                } else {
                    echo 'Email';
                }
                ?>" />
                <div class="file_inputs_block">
                    <label for="sell_photos" class="sell_photos">
                        <?php
                        $current_language = pll_current_language();
                        if ($current_language == 'en') {
                            echo 'Add your photo';

                        } elseif ($current_language == 'ru') {
                            echo 'Добавьте изображение';
                        } else {
                            echo 'Add your photo';
                        }
                        ?>
                    </label>
                    <input type="file" required data-role="file" name="sell_photos[]" class="sell_form_photos"
                        id="sell_photos" multiple accept=".png, .jpg, .jpeg" data-mode="drop"
                        data-button-title="Add photos">
                    <span class="photos_desc">* We will add it to your review to make it aesthetically pleasing</span>
                </div>

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
            <div id="successMessage" style="display: none;">
                Form submitted successfully!
            </div>
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

    <section class="sell_page_faq container" data-aos="fade-up" data-aos-delay="600">
        <div class="section_title" data-aos="fade-up" data-aos-delay="300">
            <h2>
                <?php
                $current_language = pll_current_language();
                if ($current_language == 'en') {
                    $cars_fleet = get_field('faq_title_en');
                    echo $cars_fleet;

                } elseif ($current_language == 'ru') {
                    $cars_fleet = get_field('faq_title_ru');
                    echo $cars_fleet;
                } else {
                    $cars_fleet = get_field('faq_title_en');
                    echo $cars_fleet; // Вывод значения по умолчанию
                }
                ?>
            </h2>
        </div>




        <div data-role="accordion" data-material="true">

            <?php

            $current_language = pll_current_language();

            if ($current_language == 'en') {
                $repeater = get_field('sell_page_faq');
            } elseif ($current_language == 'ru') {
                $repeater = get_field('sell_page_faq_ru');
            } else {
                $repeater = get_field('sell_page_faq');
            }

            if ($repeater) {
                foreach ($repeater as $row) {
                    $question = $row['question'];
                    $answer = $row['answer'];

                    echo '<div class="frame">
                <div class="heading">' . esc_html($question) . '</div>
                <div class="content">
                    <div class="p-2">' . esc_html($answer) . '.</div>
                </div>
            </div>';

                }
            } else {

                echo '<p>No data</p>';
            }
            ?>


        </div>

    </section>







    <script>
        jQuery(document).ready(function () {
            jQuery(".loader_form_wrap ").hide();
            jQuery(".sell_car_form").submit(function (e) {
                e.preventDefault();

                // Show loader
                jQuery(".loader_form_wrap").show();

                // Get form data
                var formData = new FormData(this);
                formData.append('action', 'sell_car_form');

                // Send AJAX request
                jQuery.ajax({
                    url: ajaxurl,
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Hide loader
                        jQuery(".loader_form_wrap").hide();

                        // Clear form
                        jQuery(".sell_car_form")[0].reset();

                        console.log(response)

                        // Show success message
                        Metro.infobox.create("<h3>Thank you!</h3> <br> <p> FORM SUBMITTED SUCCESSFULLY </p>", "success");
                    },
                    error: function (error) {
                        // Hide loader on error
                        jQuery(".loader_form_wrap").hide();
                        console.log("Error:", error.responseText);
                    }
                });
            });
        });
    </script>


    <?php get_footer() ?>
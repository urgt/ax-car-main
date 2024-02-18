<?php

// Регистрация шорткода
add_shortcode('review_form_shortcode', 'review_form_shortcode_function');

// Функция для вывода формы и JavaScript кода
function review_form_shortcode_function() {
    ob_start(); // Начинаем буферизацию вывода

    // HTML-разметка формы
    ?>
    <div class="section_title" >
        <h2 style="text-align:center;">
            <?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {

                echo 'leave your review';

            } elseif ($current_language == 'ru') {

                echo 'оставьте свой отзыв';
            } else {

                echo 'leave your review'; // Вывод значения по умолчанию
            }
            ?>
        </h2>
    </div>
    <div class="section_description"   style="text-align:center;">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {

            echo "Your valuable feedback: A catalyst for continuous improvement.";

        } elseif ($current_language == 'ru') {

            echo "Ваш ценный отзыв: катализатор постоянного улучшения.";
        } else {
            $cars_fleet = get_field('section_description_en');
            echo "Your valuable feedback: A catalyst for continuous improvement.";
        }
        ?>
    </div>
    <div id="review_loader">
        <img src="<?php echo get_template_directory_uri(); ?>/img/loader.svg"" alt="Loading">
    </div>
    <div id="message"></div> <!-- Div для отображения сообщений об успехе или ошибке -->
    <div class="buy_a_car_form_wrapper">

        <form  class="get_consultation_form" id="review-form">
            <input required name="review_author" id="review_author" type="text" class="get_consultation_first_name" placeholder="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'Name';

            } elseif ($current_language == 'ru') {
                echo 'Имя';
            } else {
                echo 'Name';
            }
            ?>" />
            <input required  type="text" id="review-country" name="review_country" class="get_consultation_phone_number" placeholder="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'Country';

            } elseif ($current_language == 'ru') {
                echo 'Введите страну';
            } else {
                echo 'Country';
            }
            ?>" />
            <textarea required type="text" id="review-text" name="review_text" rows="5" maxlength="430" cols="33" placeholder="<?php
            $current_language = pll_current_language();
            if ($current_language == 'en') {
                echo 'Your review ';

            } elseif ($current_language == 'ru') {
                echo 'Ваш отзыв';
            } else {
                echo 'Your review';
            }
            ?>"></textarea>
            <div class="g-recaptcha" data-sitekey="6Lc_PWUpAAAAAEU1bdD82P_ezQPDXhK8rhT1HrBW"></div>
            <div class="auto_translate">* You can leave a review in your native language, it will be automatically translated into English</div>
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
                echo 'Или свяжитесь с нами через';
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

    <style>
        .swiper-slide{
            height: unset;
            align-items: stretch;
        }
        div#message {
            margin-top: 25px;
            text-align: center;
            color: #d3a188;
            font-size: 23px;
        }
        #review-text{
            resize: none;
            border: none;
            background: none;
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.6);
            opacity: 0.6;
            font-variant-numeric: lining-nums proportional-nums;
            font-family: "Montserrat", sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            outline: none;
        }
        .auto_translate{
            grid-column: 1/3;
            color: #D3A188;
            font-family: "Montserrat", sans-serif;
            font-size: 18px;
            font-weight: 300;
            line-height: 27px;
            letter-spacing: 0;
            text-align: left;

        }
        div#review_loader {
            position: absolute;
            display: flex;
            justify-content: center;
            position: absolute;
            width: 100%;
            height: 80%;
            background: #000000d1;
            z-index: 2;
        }
        div#review_loader img {
            width: 60px;
        }
        @media (max-width: 768px){
            .auto_translate {
                grid-column: unset;
            }
        }

    </style>
    <script>
        jQuery(document).ready(function($) {
            $('#review_loader').hide();
            $('#review-form').submit(function(e) {
                e.preventDefault();
                const formData = $(this).serialize();
                $('#review_loader').show();
                $.ajax({
                    type: 'POST',
                    url: ajaxurl,
                    data: formData + '&action=submit_review',
                    success: function(response) {
                        $('#review_loader').hide();
                        $('#message').html(response);
                    }
                });
            });
        });
    </script>
    <?php

    return ob_get_clean(); // Возвращаем содержимое буфера
}
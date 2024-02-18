<?php

require_once get_template_directory() . '/include/template/review.php';

add_action('wp_ajax_submit_review', 'submit_review_callback');
add_action('wp_ajax_nopriv_submit_review', 'submit_review_callback');
function submit_review_callback()
{
    function SiteVerify($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 15);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
        $curlData = curl_exec($curl);
        curl_close($curl);
        return $curlData;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Очищаем и защищаем данные из формы
        $language = isset($_POST['review_language']) ? $_POST['review_language'] : '';
        $title = sanitize_text_field($_POST['review_author']);
        $country = sanitize_text_field($_POST['review_country']);
        $text = sanitize_textarea_field($_POST['review_text']);
        $recaptcha = $_POST['g-recaptcha-response'];


        if (empty($recaptcha)) {
            // Если есть незаполненные поля, выводим ошибку
            echo "Please fill recaptcha.";
            exit();
        }

        // Проверка заполненности полей
        if (empty($title) || empty($country) || empty($text) || empty($recaptcha)) {
            // Если есть незаполненные поля, выводим ошибку
            echo "Please fill in all the fields.";
        } else {

            $google_url = "https://www.google.com/recaptcha/api/siteverify";
            $secret = '6Lc_PWUpAAAAAEuwaBIG-ZXPfjJvafoNchapaQHG';
            $ip = $_SERVER['REMOTE_ADDR'];
            $url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $ip;
            $res = SiteVerify($url);
            $res = json_decode($res, true);

            if ($res['success']) {
                // Создаем массив данных для нового поста
                $review_data = array(
                    'post_title' => $title,
                    'post_status' => 'pending',
                    'post_type' => 'review',
                    'pll_post_language' => $language,
                );

                // Вставляем новый пост в базу данных
                $review_id = wp_insert_post($review_data);


// Сохраняем значения из ACF полей в метаполя создаваемого поста
                update_post_meta($review_id, 'review_country', $country);
                update_post_meta($review_id, 'review_text', $text);

                // Проверяем, успешно ли был создан пост
                if ($review_id) {
                    echo 'Review submitted successfully!  Your review will appear on the website soon';
                } else {
                    echo 'Error submitting review!';
                }

                // Завершаем выполнение скрипта
                wp_die();

            } else {
                echo "ERROR: Recaptcha error!";
            }


        }
    }

}


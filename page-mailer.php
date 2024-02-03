<?php get_header(); ?>
<main>
	<section class="page_title" style="background-image: url(/wp-content/themes/ax-car-main/img/Sectiondd-min.jpeg)">
		<div class="page_title_block">
			<div class="page_title_text" >
				<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo 'SUBMIT FORM';

				} elseif ($current_language == 'ru') {
					echo 'Отправка заявки';
				} else {
					echo 'SUBMIT FORM';
				}
				?>
			</div>
			<div class="breadcrums"  >
				<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '<span><a href="/">Home</a></span>
              <span>Submit form</span>';

				} elseif ($current_language == 'ru') {
					echo '<span><a href="/ru/">Главная</a></span>
              <span>Отправка заявки</span>';
				} else {
					echo '<span>Home</span>
              <span>Submit form</span>';
				}
				?>
			</div>
		</div>
		<div class="background_overlay"></div>
	</section>

	<section class="buy_a_car_form container">
		<div class="section_title" >
			<?php

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
				// Получение значений полей формы
				$name = $_POST["yourname"];
				$lastname = $_POST["lastname"];
				$number = $_POST["number"];
				$email = $_POST["email"];
				$message = $_POST["message"];
                $recaptcha = $_POST['g-recaptcha-response'];




				// Проверка заполненности полей
				if (empty($name) || empty($number) || empty($email) || empty($recaptcha)) {
					// Если есть незаполненные поля, выводим ошибку
					echo "Please fill in all the fields.";
				} else {

                    $google_url="https://www.google.com/recaptcha/api/siteverify";
                    $secret='6Lc_PWUpAAAAAEuwaBIG-ZXPfjJvafoNchapaQHG';
                    $ip=$_SERVER['REMOTE_ADDR'];
                    $url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
                    $res=SiteVerify($url);
                    $res= json_decode($res, true);

                    if($res['success'])
                    {
                        //отправка на webhook
                        // Получение User-Agent (браузера)
                        $user_agent = $_SERVER['HTTP_USER_AGENT'];

                        // Получение IP-адреса пользователя
                        $user_ip = $_SERVER['REMOTE_ADDR'];

                        // Получение полного URL с UTM-метками
                        $current_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                        // Получение реферера (откуда пользователь перешел)
                        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';


                        $post_data = array(
                            'name' => $name,
                            'phone' => $number,
                            'email' => $email,
                            'message' => $message,
                            'client_ip' => $user_ip,
                            'client_url' => $current_url,
                            'source' => 'axcars',
                        );

                        // Создайте запрос
                        $request_args = array(
                            'body' => $post_data,
                            'headers' => array(
                                'Content-Type' => 'application/x-www-form-urlencoded',
                                'User-Agent' => $user_agent,
                                'Referer' => $referer
                            ),
                        );

                        // Отправка запроса
                        $response = wp_safe_remote_post('https://api.axcapital.ae/api/v2/submit/form/', $request_args);

                        if (is_wp_error($response)) {
                            $resp = 'Ошибка при отправке запроса: ' . $response->get_error_message();
                        } else {
                            $response_body = wp_remote_retrieve_body($response);
                            $resp = 'Ответ от сервера: ' . $response_body;
                        }

                        $log = date('Y-m-d H:i:s') . ' ' . print_r($post_data, true) . $resp;
                        file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
                        //отправка на webhook завершился




                        // Формирование заголовка письма
                        //$to = "urinbaevg@gmail.com";
                        $to = "Vitalii@axmotors.ae";
                        $subject = "New Consultation Request";
                        $message = "Name: $name, \nLast Name: $lastname, \nPhone Number: $number, \nEmail: $email, \nMessage: $message";

                        // Опции для функции wp_mail()
                        $headers = array(
                            'From: AX LUXURY CARS <info@axcars.ae>',
                            'Content-Type: text/html; charset=UTF-8'
                        );

                        // Отправка письма
                        if (wp_mail($to, $subject, $message, $headers)) {
                            // Если письмо отправлено успешно, выводим сообщение об успешной отправке формы

                            $current_language = pll_current_language();
                            if ($current_language == 'en') {
                                echo 'Form submitted successfully';

                            } elseif ($current_language == 'ru') {
                                echo 'Форма успешно отправлена';
                            } else {
                                echo 'Form submitted successfully';
                            }
                        } else {
                            // Если возникла ошибка при отправке письма, выводим сообщение об ошибке
                            echo "Error sending the form. Please try again later.";
                        }
                    }
                    else{
                        echo "ERROR: Recaptcha error!";
                    }


				}
			}
			?>





		</div>
		<div class="section_description"   style="text-align:center;">
			<a onclick="javascript:history.back(); return false;" href='#' class="button" style="width: 100px;
	display: block;
	text-align: center;
	margin: 70px auto 0px;">
				<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo 'Back';

				} elseif ($current_language == 'ru') {
					echo 'Назад';
				} else {
					echo 'Back';
				}
				?>
			</a>
		</div>

	</section>






	<?php get_footer() ?>
<?php

function enqueue_custom_styles()
{

	if (is_page('sell')) {
		wp_enqueue_style('metro-style', get_template_directory_uri() . '/assets/metro/metro.css', array(), null);
		wp_enqueue_style('metro-icons-style', get_template_directory_uri() . '/assets/metro/icons.css', array(), null);
		wp_enqueue_style('select2-style', get_template_directory_uri() . '/assets/select2/select2.css', array(), null);
	}

	// Подключение стилей для swiper
	wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null);

	// Подключение остальных стилей
	wp_enqueue_style('ax-car-main-form-style', get_template_directory_uri() . '/assets/formstyle.css', array(), null);
	wp_enqueue_style('ax-car-main-accordion-style', get_template_directory_uri() . '/assets/accordion.css', array(), null);
	wp_enqueue_style('ax-car-main-style', get_template_directory_uri() . '/style.css', array(), null);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_custom_scripts()
{
	// Подключение jQuery
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), null, true);

	// Подключение скрипта для swiper
	wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), null, true);

	wp_enqueue_script('metro-script', get_template_directory_uri() . '/assets/metro/metro.js', array('jquery'), null, true);

	// Подключение скрипта для accordion
	wp_enqueue_script('accordion-script', get_template_directory_uri() . '/assets/accordion.js', array('jquery', 'swiper-script'), null, true);

	wp_enqueue_script('select2-script', get_template_directory_uri() . '/assets/select2/select2.full.js', array('jquery'), null, true);
	// Подключение скрипта для ax-car-main
	wp_enqueue_script('ax-car-main-script', get_template_directory_uri() . '/assets/script.js', array('jquery', 'select2-script', 'swiper-script', 'metro-script', 'accordion-script'), null, true);


}

// Добавляем хук для загрузки скриптов
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');




function modify_filter_button($string)
{
	$current_language = pll_current_language();
	if ($current_language == 'en') {
		return 'SEARCH';

	} elseif ($current_language == 'ru') {
		return 'ПОИСК';
	} else {
		return 'SEARCH';
	}
}

add_filter('beautiful_filters_apply_button', 'modify_filter_button', 10, 1);

function book_shortcode()
{
	?>

	<div class="section_title" >
		<h2 style="text-align:center;">
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {

				echo 'GET PROFESSIONAL AGENT CONSULTATION';

			} elseif ($current_language == 'ru') {

				echo 'ПОЛУЧИТЕ ПРОФЕССИОНАЛЬНУЮ КОНСУЛЬТАЦИЮ АГЕНТА';
			} else {

				echo 'GET PROFESSIONAL AGENT CONSULTATION'; // Вывод значения по умолчанию
			}
			?>
		</h2>
	</div>
	<div class="section_description"   style="text-align:center;">
		<?php
		$current_language = pll_current_language();
		if ($current_language == 'en') {

			echo "Leave your contact details and our specialist will reach you and advise you on any questions you may have.";

		} elseif ($current_language == 'ru') {

			echo "Оставьте ваши контактные данные и наш специалист свяжется с вами и проконсультирует по интересующим вас вопросам.";
		} else {
			$cars_fleet = get_field('section_description_en');
			echo "Leave your contact details and our specialist will reach you and advise you on any questions you may have.";
		}
		?>
	</div>
	<div class="buy_a_car_form_wrapper">

		<form class="get_consultation_form"   method="POST" action="<?php
		$current_language = pll_current_language();
		if ($current_language == 'en') {
			echo '/mailer';

		} elseif ($current_language == 'ru') {
			echo '/ru/mailer';
		} else {
			echo '/mailer';
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

	<?php
}
add_shortcode('booknowwshortcode', 'book_shortcode');





function rent_shortcode()
{
	?>

	<div class="section_title" >
		<h2 style="text-align:center;">
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {

				echo 'RENT A CAR ONLINE WITH DELIVERY';

			} elseif ($current_language == 'ru') {

				echo 'АРЕНДА МАШИНЫ ОНЛАЙН С ДОСТАВКОЙ';
			} else {

				echo 'RENT A CAR ONLINE WITH DELIVERY'; // Вывод значения по умолчанию
			}
			?>
		</h2>
	</div>
	<div class="section_description"   style="text-align:center;">
		<?php
		$current_language = pll_current_language();
		if ($current_language == 'en') {

			echo "Let us know your preferences, and we'll handle the entire purchase process for you. Our team will find the right car, negotiate deals, and manage all the details, saving you time and ensuring a hassle-free experience.";

		} elseif ($current_language == 'ru') {

			echo "Расскажите нашим агентам о предпочтениях при выборе машины, и мы освободим вас от хлопот. Команда займется покупкой авто, обсудит с вами все детали и доставит машину в любую точку Дубая. Это значительно сэкономит ваше время.";
		} else {
			$cars_fleet = get_field('section_description_en');
			echo "Let us know your preferences, and we'll handle the entire purchase process for you. Our team will find the right car, negotiate deals, and manage all the details, saving you time and ensuring a hassle-free experience.";
		}
		?>
	</div>
	<div class="buy_a_car_form_wrapper">

		<form class="get_consultation_form"   method="POST" action="<?php
		$current_language = pll_current_language();
		if ($current_language == 'en') {
			echo '/mailer';

		} elseif ($current_language == 'ru') {
			echo '/ru/mailer';
		} else {
			echo '/mailer';
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

	<?php
}
add_shortcode('rentnowwshortcode', 'rent_shortcode');


/* Pagination */

function my_pagenavi()
{
	global $wp_query;

	$big = 999999999; // уникальное число для замены

	$args = array(
		'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		'format' => '',
		'total' => 0,
		'current' => 0,
		'show_all' => False,
		'end_size' => 1,
		'mid_size' => 1,
		'prev_text' => __('«'),
		'next_text' => __('»'),
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,

	);

	$result = paginate_links($args);

	// удаляем добавку к пагинации для первой страницы
	//$result = preg_replace( '~/page/1/?([\'"])~', '', $result );

	echo $result;
}


/* ФУНКЦИЯ КОНВЕРТАЦИИ ВАЛЮТ */

function convert_currency($amount, $from, $to)
{
	$url = "https://api.exchangerate-api.com/v4/latest/" . $from;
	$response = wp_remote_get($url);

	if (is_wp_error($response)) {
		return false; // Обработка ошибки при получении данных с API
	}

	$json = json_decode(wp_remote_retrieve_body($response), true);

	if (!empty($json) && $json['rates'][$to]) {
		return $amount * $json['rates'][$to]; // Конвертирование валюты
	}

	return false; // Обработка ошибки при получении курсов обмена валют
}


function display_converted_price()
{
	$price_aed = get_field('price_aed'); // Получение значения цены в AED из ACF

	$price_usd = convert_currency($price_aed, 'AED', 'USD'); // Конвертация в USD
	$price_eur = convert_currency($price_aed, 'AED', 'EUR'); // Конвертация в EUR

	// Вывод конвертированных цен
	echo 'Цена в USD: ' . $price_usd . '<br>';
	echo 'Цена в EUR: ' . $price_eur;
}

update_option('blogname', 'AX MOTORS');


// sell_car_form_handler()
function sell_car_form_handler()
{
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sell_name'])) {
		$required_fields = array('sell_name', 'sell_phone', 'sell_brand', 'sell_model', 'sell_year', 'sell_mileage', 'sell_price', 'sell_email');
		$errors = array();

		foreach ($required_fields as $field) {
			if (empty($_POST[$field])) {
				$errors[] = "Field '$field' is required.";
			}
		}

		if (!empty($errors)) {
			$response = array(
				'status' => 'error',
				'message' => 'Validation failed',
				'errors' => $errors,
			);
			http_response_code(400); // Bad Request
			echo json_encode($response);
			return;
		}

		//$to = 'vitalii@axmotors.ae';
		$to = 'urinbaevg@gmail.com';
		$subject = 'New Car Sell Form Submission';

		$message = "<p><strong>Brand:</strong> {$_POST['sell_brand']}</p>";
		$message .= "<p><strong>Model:</strong> {$_POST['sell_model']}</p>";
		$message .= "<p><strong>Mileage:</strong> {$_POST['sell_mileage']}</p>";
		$message .= "<p><strong>Year:</strong> {$_POST['sell_year']}</p>";
		$message .= "<p><strong>Price:</strong> {$_POST['sell_price']}</p>";
		$message .= "<p><strong>Name:</strong> {$_POST['sell_name']}</p>";
		$message .= "<p><strong>Phone:</strong> {$_POST['sell_phone']}</p>";
		$message .= "<p><strong>Email:</strong> {$_POST['sell_email']}</p>";

		if (!empty($_FILES['sell_photos'])) {
			$attachments = array();
			foreach ($_FILES['sell_photos']['tmp_name'] as $key => $tmp_name) {
				$file_name = $_FILES['sell_photos']['name'][$key];
				$file_size = $_FILES['sell_photos']['size'][$key];
				$file_tmp = $_FILES['sell_photos']['tmp_name'][$key];

				if ($file_size > 0) {
					$attachments[] = array(
						'name' => $file_name,
						'size' => $file_size,
						'tmp_name' => $file_tmp,
					);
				}
			}

			$headers = array(
				'Content-Type: text/html; charset=UTF-8',
			);

			$combined_attachments = array();
			foreach ($attachments as $attachment) {
				$combined_attachments[$attachment['name']] = $attachment['tmp_name'];
			}

			// Check if the email was sent successfully
			$sent = wp_mail($to, $subject, $message, $headers, $combined_attachments);
			if ($sent) {
				$response = array(
					'status' => 'success',
					'message' => 'Email sent successfully.',
				);
				http_response_code(200); // OK
			} else {
				$response = array(
					'status' => 'error',
					'message' => 'Error sending email.',
				);
				http_response_code(500); // Internal Server Error
			}
		} else {
			// Check if the email was sent successfully
			$sent = wp_mail($to, $subject, $message);
			if ($sent) {
				$response = array(
					'status' => 'success',
					'message' => 'Email sent successfully.',
				);
				http_response_code(200); // OK
			} else {
				$response = array(
					'status' => 'error',
					'message' => 'Error sending email.',
				);
				http_response_code(500); // Internal Server Error
			}
		}

		echo json_encode($response);
		wp_die();
	}
}

add_action('wp_ajax_nopriv_sell_car_form', 'sell_car_form_handler');
add_action('wp_ajax_sell_car_form', 'sell_car_form_handler');


function add_custom_csp_meta_tag()
{
	echo '<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">';
}

add_action('admin_head', 'add_custom_csp_meta_tag');

// function remove_taxonomy_widgets_for_buy_a_car()
// {

// 	remove_meta_box('categorydiv', 'buy_a_car', 'side');
// 	remove_meta_box('tagsdiv-post_tag', 'buy_a_car', 'side');

// 	$taxonomies = get_object_taxonomies('buy_a_car', 'objects');
// 	foreach ($taxonomies as $taxonomy) {
// 		remove_meta_box('tagsdiv-' . $taxonomy->name, 'buy_a_car', 'side');
// 	}
// }

// add_action('admin_menu', 'remove_taxonomy_widgets_for_buy_a_car');


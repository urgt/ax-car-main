<?php get_header(); ?>
<main class="buy-archive__main">
	<section class="page_title"
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/buy_car.jpg)">
		<div class="page_title_block">
			<div class="page_title_text" data-aos="fade-up" data-aos-delay="200">
				<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'Buy a car'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'Купить авто'; // Вывод значения для русского языка
				} else {
					echo 'Buy a car'; // Вывод значения по умолчанию
				}
				?>

			</div>
			<div class="breadcrums" data-aos="fade-up" data-aos-delay="300">
				<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo '<span><a href="/">Home</a></span>
              <span>Buy a car</span>'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo '<span><a href="/ru/">Главная</a></span>
              <span>Купить авто</span>'; // Вывод значения для русского языка
				} else {
					echo '<span>Home</span>
              <span>Buy a car</span>'; // Вывод значения по умолчанию
				}
				?>

			</div>
		</div>
		<div class="background_overlay"></div>
	</section>
	<section class="main_page_catalog">
		<div class="main_page_catalog_inner container">
			<?php
			$current_language = pll_current_language(); // Получение текущего языка
			if ($current_language == 'en') { // Если текущий язык - английский
				echo '<div class="section_subtitle luxury" data-aos="fade-up"
				 data-aos-delay="200">Our Collection</div>
            <div class="section_title" data-aos="fade-up"
				 data-aos-delay="300"><h1>Luxury Cars in Dubai</h1></div>
            '; // Вывод значения для английского языка
				// Добавьте здесь необходимые строки для других значений на английском языке
			} elseif ($current_language == 'ru') { // Если текущий язык - русский
				echo '<div class="section_subtitle luxury" data-aos="fade-up"
				 data-aos-delay="200">Наша коллекция</div>
            <div class="section_title" data-aos="fade-up"
				 data-aos-delay="300"><h1>Элитные автомобили в Дубае</h1></div>
            '; // Вывод значения для русского языка
			} else {
				echo '<div class="section_subtitle luxury" data-aos="fade-up"
				 data-aos-delay="200">Our Collection</div>
            <div class="section_title" data-aos="fade-up"
				 data-aos-delay="300"><h1>Luxury Cars in Dubai</div>
            <div class="section_description" data-aos="fade-up"
				 data-aos-delay="400">
              Our fleet features 2021 to 2023 cars, which are in excellent
              technical condition. We will deliver the chosen car to any
              convenient location in Dubai within 3 hours.
            </div>'; // Вывод значения по умолчанию
			}
			?>

			<div class="section_description new_section_description">
				<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'Our experienced team offers personalized consultations, guiding you through the process and helping you find the right vehicle to meet your specific requirements for your comfort.'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'Наша опытная команда предлагает индивидуальные консультации, сопровождая вас на протяжении всего процесса и помогая вам найти подходящий автомобиль, отвечающий вашим конкретным требованиям к вашему комфорту.'; // Вывод значения для русского языка
				} else {
					echo 'Our experienced team offers personalized consultations, guiding you through the process and helping you find the right vehicle to meet your specific requirements for your comfort.'; // Вывод значения по умолчанию
				} ?>

			</div>

			<div class="tabs">
				<div class="tab active">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'BRANDS'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'БРЕНДЫ'; // Вывод значения для русского языка
					} else {
						echo 'BRANDS'; // Вывод значения по умолчанию
					}
					?>
				</div>
				<div class="tab">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'CATEGORY'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'КАТЕГОРИИ'; // Вывод значения для русского языка
					} else {
						echo 'CATEGORY'; // Вывод значения по умолчанию
					} ?>
				</div>
			</div>

			<div class="tab-content">
				<div class="content-tab active">

					<section class="logos_section brands" id="brands" style="padding-top:0px;">
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/porsche/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/porsche/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/porsche/'; // Вывод значения по умолчанию
						}
						?>"><img width="100" style="padding-top:2px;" data-aos="fade-up" data-aos-delay="50"
								src="<?php echo get_template_directory_uri(); ?>/img/Porsche11.svg"
								alt="Ax motors Porsche" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/mercedes-benz/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/mercedes-benz/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/mercedes-benz/'; // Вывод значения по умолчанию
						}
						?>"><img width="100" data-aos="fade-up" data-aos-delay="150"
								src="<?php echo get_template_directory_uri(); ?>/img/Mercedes11.svg"
								alt="Ax motors Mercedes Benz" /></a>
						<a class="brand" class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/bentley/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/bentley/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/bentley/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:10px"><img width="150" data-aos="fade-up" data-aos-delay="250"
								src="<?php echo get_template_directory_uri(); ?>/img/Bentley11.svg"
								alt="Ax motors Bentley" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/bmw/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/bmw/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/bmw/'; // Вывод значения по умолчанию
						}
						?>"><img width="100" data-aos="fade-up" data-aos-delay="350"
								src="<?php echo get_template_directory_uri(); ?>/img/BMW11.svg"
								alt="Ax motors BMW" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/lamborghini/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/lamborghini/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/lamborghini/'; // Вывод значения по умолчанию
						}
						?>"><img width="75" style="padding-top:15px" data-aos="fade-up" data-aos-delay="450"
								src="<?php echo get_template_directory_uri(); ?>/img/Lamborghini.svg"
								alt="Ax motors Lamborghini" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/mclaren/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/mclaren/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/mclaren/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:2px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Mclaren22.svg"
								alt="Ax motors Mclaren" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/rolls-royce/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/rolls-royce/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/rolls-royce/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:5px;"><img width="75" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Rolls Royce11.svg"
								alt="Ax motors Rolls Roys" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/ferrari/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/ferrari/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/ferrari/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:3px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Ferrari11.svg"
								alt="Ax motors Ferrari" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/land-rover/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/land-rover/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/land-rover/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:12px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Land Rover11.svg"
								alt="Ax motors Land Rover" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/cadillac/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/cadillac/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/cadillac/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:7px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Cadillac22.svg"
								alt="Ax motors Cadillac" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/jaguar/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/jaguar/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/jaguar/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:15px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Jaguar11.svg" alt="Jaguar" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/audi/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/audi/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/audi/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:13px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Audi11.svg"
								alt="Ax motors Audi" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/bugatti/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/bugatti/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/bugatti/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:5px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Bugatti11 (1).svg"
								alt="Ax motors Bugatti" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/lotus/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/lotus/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/lotus/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:20px">
							<img width="80" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Lotus11.svg"
								alt="Ax motors Lotus" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/lincoln/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/lincoln/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/lincoln/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:17px">
							<img width="80" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Lincoln11.svg"
								alt="Ax motors Lincoln" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/maserati/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/maserati/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/maserati/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:15px">
							<img width="75" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Layer_17 (3).svg"
								alt="Ax motors Maserati" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/corvette/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/corvette/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/corvette/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:16px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Corvette11.svg"
								alt="Ax motors Corvette" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/mini/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/mini/'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/mini/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:20px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Mini11.svg"
								alt="Ax motors Mini" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo '/buy_brands/aston-martin/'; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo '/ru/buy_brands/aston-martin'; // Вывод значения для русского языка
						} else {
							echo '/buy_brands/aston-martin/'; // Вывод значения по умолчанию
						}
						?>" style="padding-top:18px">
							<img width="120" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Aston Martin11.svg"
								alt="Aston Martin" /></a>

					</section>

				</div>

				<div class="content-tab">

					<div class="logos_section container classes" id="classes" style="padding-top:0px;">

						<div style="text-align:center;">
							<a href="<?php
							$current_language = pll_current_language(); // Получение текущего языка
							if ($current_language == 'en') { // Если текущий язык - английский
								echo '/buy_a_car'; // Вывод значения для английского языка
								// Добавьте здесь необходимые строки для других значений на английском языке
							} elseif ($current_language == 'ru') { // Если текущий язык - русский
								echo '/ru/buy_a_car'; // Вывод значения для русского языка
							} else {
								echo '/buy_a_car'; // Вывод значения по умолчанию
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/alcars.png"
									alt="All cars" /><br>
								<?php
								$current_language = pll_current_language(); // Получение текущего языка
								if ($current_language == 'en') { // Если текущий язык - английский
									echo 'All cars'; // Вывод значения для английского языка
									// Добавьте здесь необходимые строки для других значений на английском языке
								} elseif ($current_language == 'ru') { // Если текущий язык - русский
									echo 'Все авто'; // Вывод значения для русского языка
								} else {
									echo 'All cars'; // Вывод значения по умолчанию
								}
								?>
							</a>
						</div>

						<div style="text-align:center;">
							<a href="<?php
							$current_language = pll_current_language(); // Получение текущего языка
							if ($current_language == 'en') { // Если текущий язык - английский
								echo '/buy_class/business-class'; // Вывод значения для английского языка
								// Добавьте здесь необходимые строки для других значений на английском языке
							} elseif ($current_language == 'ru') { // Если текущий язык - русский
								echo '/ru/buy_class/business-class'; // Вывод значения для русского языка
							} else {
								echo '/buy_class/business-class'; // Вывод значения по умолчанию
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/businessclass.png"
									alt="Business class" /><br>
								<?php
								$current_language = pll_current_language(); // Получение текущего языка
								if ($current_language == 'en') { // Если текущий язык - английский
									echo 'Business class'; // Вывод значения для английского языка
									// Добавьте здесь необходимые строки для других значений на английском языке
								} elseif ($current_language == 'ru') { // Если текущий язык - русский
									echo 'Бизнес класс'; // Вывод значения для русского языка
								} else {
									echo 'Business class'; // Вывод значения по умолчанию
								}
								?>
							</a>
						</div>

						<div style="text-align:center;">
							<a href="<?php
							$current_language = pll_current_language(); // Получение текущего языка
							if ($current_language == 'en') { // Если текущий язык - английский
								echo '/buy_class/middle-class'; // Вывод значения для английского языка
								// Добавьте здесь необходимые строки для других значений на английском языке
							} elseif ($current_language == 'ru') { // Если текущий язык - русский
								echo '/ru/buy_class/middle-class'; // Вывод значения для русского языка
							} else {
								echo '/buy_class/middle-class'; // Вывод значения по умолчанию
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/middleclass.png"
									alt="Middle class" /><br>
								<?php
								$current_language = pll_current_language(); // Получение текущего языка
								if ($current_language == 'en') { // Если текущий язык - английский
									echo 'Middle class'; // Вывод значения для английского языка
									// Добавьте здесь необходимые строки для других значений на английском языке
								} elseif ($current_language == 'ru') { // Если текущий язык - русский
									echo 'Средний класс'; // Вывод значения для русского языка
								} else {
									echo 'Middle class'; // Вывод значения по умолчанию
								}
								?>
							</a>
						</div>

						<div style="text-align:center;">
							<a href="<?php
							$current_language = pll_current_language(); // Получение текущего языка
							if ($current_language == 'en') { // Если текущий язык - английский
								echo '/buy_class/sport-cars'; // Вывод значения для английского языка
								// Добавьте здесь необходимые строки для других значений на английском языке
							} elseif ($current_language == 'ru') { // Если текущий язык - русский
								echo '/ru/buy_class/sport-cars'; // Вывод значения для русского языка
							} else {
								echo '/buy_class/sport-cars'; // Вывод значения по умолчанию
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/sportcars.png"
									alt="Sport cars" /><br>
								<?php
								$current_language = pll_current_language(); // Получение текущего языка
								if ($current_language == 'en') { // Если текущий язык - английский
									echo 'Sport cars'; // Вывод значения для английского языка
									// Добавьте здесь необходимые строки для других значений на английском языке
								} elseif ($current_language == 'ru') { // Если текущий язык - русский
									echo 'Спорткары'; // Вывод значения для русского языка
								} else {
									echo 'Sport cars'; // Вывод значения по умолчанию
								}
								?>
							</a>
						</div>


					</div>

				</div>
			</div>





			<div class="main_page_catalog_cards" data-aos="fade-up" data-aos-delay="300">

				<?php
				// проверяем есть ли посты в глобальном запросе - переменная $wp_query
				if (have_posts()) {
					// перебираем все имеющиеся посты и выводим их
					while (have_posts()) {
						the_post();
						?>


						<div data-aos="fade-up" data-aos-delay="100">

							<a href="<?php the_permalink(); ?>" class="main_page_catalog_cards_card" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				')">

							</a>
							<a href="<?php the_permalink(); ?>">
								<div class="buy_info">

									<div class="buy_car_title" id="textContainer">
										<span>
											<?php the_title(); ?>
										</span>
									</div>
									<div class="buy_car_price">
										<?php
										$terms = get_the_terms($post->ID, 'buy_price');
										echo number_format($terms[0]->name, 0, '.', ' ');
										?> AED
									</div>

								</div>
							</a>
						</div>

						<?php
					}
					?>
				</div>
				<div style="clear:both"></div>
				<div class="navigation">
					<?php if (function_exists('my_pagenavi')) {
						my_pagenavi();
					} ?>
					<!--
		<div class="next-posts"><?php // next_posts_link(); ?></div>
		<div class="prev-posts"><?php // previous_posts_link(); ?></div>-->
				</div>

				<?php
				}
				// постов нет
				else {
					echo "<h2>Записей нет.</h2>";
				}
				?>

		</div>
	</section>

	<section class="buy_a_car_form container">
		<div class="section_title" data-aos="fade-up" data-aos-delay="300">
			<h2>
				<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'BUYING A CAR ONLINE WITH DELIVERY'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'ПОКУПКА МАШИНЫ ОНЛАЙН С ДОСТАВКОЙ'; // Вывод значения для русского языка
				} else {
					echo 'BUYING A CAR ONLINE WITH DELIVERY'; // Вывод значения по умолчанию
				}
				?>
			</h2>
		</div>
		<div class="section_description" data-aos="fade-up" data-aos-delay="450">
			<?php
			$current_language = pll_current_language(); // Получение текущего языка
			if ($current_language == 'en') { // Если текущий язык - английский
				echo "Let us know your preferences, and we'll handle the entire purchase process for you. Our team will find the right car, negotiate deals, and manage all the details, saving you time and ensuring a hassle-free experience."; // Вывод значения для английского языка
				// Добавьте здесь необходимые строки для других значений на английском языке
			} elseif ($current_language == 'ru') { // Если текущий язык - русский
				echo 'Расскажите нашим агентам о предпочтениях при выборе машины, и мы освободим вас от хлопот. Команда займется покупкой авто, обсудит с вами все детали и доставит машину в любую точку Дубая. Это значительно сэкономит ваше время.'; // Вывод значения для русского языка
			} else {
				echo "Let us know your preferences, and we'll handle the entire purchase process for you. Our team will find the right car, negotiate deals, and manage all the details, saving you time and ensuring a hassle-free experience."; // Вывод значения по умолчанию
			}
			?>
		</div>
		<div class="buy_a_car_form_wrapper">

			<form class="get_consultation_form" data-aos="fade-up" data-aos-delay="600" method="POST" action="<?php
			$current_language = pll_current_language(); // Получение текущего языка
			if ($current_language == 'en') { // Если текущий язык - английский
				echo 'https://axluxurycars.ae/mailer'; // Вывод значения для английского языка
				// Добавьте здесь необходимые строки для других значений на английском языке
			} elseif ($current_language == 'ru') { // Если текущий язык - русский
				echo 'https://axluxurycars.ae/ru/mailer'; // Вывод значения для русского языка
			} else {
				echo 'https://axluxurycars.ae/mailer'; // Вывод значения по умолчанию
			}
			?>">
				<input required name="yourname" type="text" class="get_consultation_first_name" placeholder="<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'First Name'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'Ваше имя'; // Вывод значения для русского языка
				} else {
					echo 'First Name'; // Вывод значения по умолчанию
				}
				?>" />
				<input required name="lastname" type="text" class="get_consultation_last_name" placeholder="<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'Last Name'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'Фамилия'; // Вывод значения для русского языка
				} else {
					echo 'Last Name'; // Вывод значения по умолчанию
				}
				?>" />
				<input required name="number" type="tel" class="get_consultation_phone_number" placeholder="<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'Phone Number'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'Номер телефона'; // Вывод значения для русского языка
				} else {
					echo 'Phone Number'; // Вывод значения по умолчанию
				}
				?>" />
				<input required name="email" type="email" class="get_consultation_email" placeholder="<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'Email'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'Электронная почта'; // Вывод значения для русского языка
				} else {
					echo 'Email'; // Вывод значения по умолчанию
				}
				?>" />
				<button class="button new">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'SEND'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'Отправить'; // Вывод значения для русского языка
					} else {
						echo 'SEND'; // Вывод значения по умолчанию
					}
					?>
				</button>
			</form>
			<div class="contact_whatsapp" data-aos="fade-up" data-aos-delay="600">
				<?php
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo 'Or contact us right now via'; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo 'Cвяжитесь с нами через'; // Вывод значения для русского языка
				} else {
					echo 'Or contact us right now via'; // Вывод значения по умолчанию
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
		<div class="section_subtitle luxury" data-aos="fade-up" data-aos-delay="100">
			<?php
			$current_language = pll_current_language(); // Получение текущего языка
			if ($current_language == 'en') { // Если текущий язык - английский
				echo 'HOW IT WORKS'; // Вывод значения для английского языка
				// Добавьте здесь необходимые строки для других значений на английском языке
			} elseif ($current_language == 'ru') { // Если текущий язык - русский
				echo 'КАК ЭТО РАБОТАЕТ'; // Вывод значения для русского языка
			} else {
				echo 'HOW IT WORKS'; // Вывод значения по умолчанию
			}
			?>
		</div>
		<div class="section_title" data-aos="fade-up" data-aos-delay="250">
			<?php
			$current_language = pll_current_language(); // Получение текущего языка
			if ($current_language == 'en') { // Если текущий язык - английский
				echo 'QUICK CAR BUY IN DUBAI'; // Вывод значения для английского языка
				// Добавьте здесь необходимые строки для других значений на английском языке
			} elseif ($current_language == 'ru') { // Если текущий язык - русский
				echo 'БЫСТРАЯ ПОКУПКА МАШИНЫ В ДУБАЕ'; // Вывод значения для русского языка
			} else {
				echo 'QUICK CAR BUY IN DUBAI'; // Вывод значения по умолчанию
			}
			?>
		</div>

		<div class="info_cards" data-aos="fade-up" data-aos-delay="400">
			<div class="info_cards_card">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Location (1).svg" alt="Quick response" />
				<div class="info_cards_card_title">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'Choose your car'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'Выберите автомобиль'; // Вывод значения для русского языка
					} else {
						echo 'Choose your car'; // Вывод значения по умолчанию
					}
					?>
				</div>
				<p class="info_cards_card_description">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'Decide what car you want to buy. If we do not have it in our fleet, we will order it for you'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'Решите, какую машину хотите купить, а мы закажем ее и доставим вам'; // Вывод значения для русского языка
					} else {
						echo 'Decide what car you want to buy. If we do not have it in our fleet, we will order it for you'; // Вывод значения по умолчанию
					}
					?>
				</p>
			</div>
			<div class="info_cards_card">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Location (2).svg" alt="Quick response" />
				<div class="info_cards_card_title">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'Make a contract'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'Заключите договор'; // Вывод значения для русского языка
					} else {
						echo 'Make a contract'; // Вывод значения по умолчанию
					}
					?>
				</div>
				<p class="info_cards_card_description">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'Sign the purchase contract and make a payment for the car'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'Подпишите договор купли-продажи и оплатите автомобиль'; // Вывод значения для русского языка
					} else {
						echo 'Sign the purchase contract and make a payment for the car'; // Вывод значения по умолчанию
					}
					?>
				</p>
			</div>
			<div class="info_cards_card">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Locationono.svg" alt="Quick response" />
				<div class="info_cards_card_title">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'Get the car'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'Получите автомобиль'; // Вывод значения для русского языка
					} else {
						echo 'Get the car'; // Вывод значения по умолчанию
					}
					?>
				</div>
				<p class="info_cards_card_description">
					<?php
					$current_language = pll_current_language(); // Получение текущего языка
					if ($current_language == 'en') { // Если текущий язык - английский
						echo 'Recieve the documents and pick up the car'; // Вывод значения для английского языка
						// Добавьте здесь необходимые строки для других значений на английском языке
					} elseif ($current_language == 'ru') { // Если текущий язык - русский
						echo 'Получите документы и заберите автомобиль'; // Вывод значения для русского языка
					} else {
						echo 'Recieve the documents and pick up the car'; // Вывод значения по умолчанию
					}
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
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo $top_cars['section_subtitle_en']; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo $top_cars['section_subtitle_ru']; // Вывод значения для русского языка
				} else {
					echo $top_cars['section_subtitle_en']; // Вывод значения по умолчанию
				}
			endif;
			?>
		</div>
		<div class="section_title" data-aos="fade-up" data-aos-delay="250">
			<?php
			$top_cars = get_field('how_it_works');
			if ($top_cars):
				$current_language = pll_current_language(); // Получение текущего языка
				if ($current_language == 'en') { // Если текущий язык - английский
					echo $top_cars['section_title_en']; // Вывод значения для английского языка
					// Добавьте здесь необходимые строки для других значений на английском языке
				} elseif ($current_language == 'ru') { // Если текущий язык - русский
					echo $top_cars['section_title_ru']; // Вывод значения для русского языка
				} else {
					echo $top_cars['section_title_en']; // Вывод значения по умолчанию
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
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo $top_cars['easy_steps_en']; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo $top_cars['easy_steps_ru']; // Вывод значения для русского языка
						} else {
							echo $top_cars['easy_steps_en']; // Вывод значения по умолчанию
						}
					endif;
					?>
				</div>
				<div class="section_description">
					<?php
					$top_cars = get_field('how_it_works');
					if ($top_cars):
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo $top_cars['you_can_en']; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo $top_cars['you_can_ru']; // Вывод значения для русского языка
						} else {
							echo $top_cars['you_can_en']; // Вывод значения по умолчанию
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
							$current_language = pll_current_language(); // Получение текущего языка
							if ($current_language == 'en') { // Если текущий язык - английский
								echo $top_cars['number_one_en']; // Вывод значения для английского языка
								// Добавьте здесь необходимые строки для других значений на английском языке
							} elseif ($current_language == 'ru') { // Если текущий язык - русский
								echo $top_cars['number_one_ru']; // Вывод значения для русского языка
							} else {
								echo $top_cars['number_one_en']; // Вывод значения по умолчанию
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
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo $top_cars['number_one_desc_en']; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo $top_cars['number_one_desc_ru']; // Вывод значения для русского языка
						} else {
							echo $top_cars['number_one_desc_en']; // Вывод значения по умолчанию
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
							$current_language = pll_current_language(); // Получение текущего языка
							if ($current_language == 'en') { // Если текущий язык - английский
								echo $top_cars['number_two_en']; // Вывод значения для английского языка
								// Добавьте здесь необходимые строки для других значений на английском языке
							} elseif ($current_language == 'ru') { // Если текущий язык - русский
								echo $top_cars['number_two_ru']; // Вывод значения для русского языка
							} else {
								echo $top_cars['number_two_en']; // Вывод значения по умолчанию
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
						$current_language = pll_current_language(); // Получение текущего языка
						if ($current_language == 'en') { // Если текущий язык - английский
							echo $top_cars['number_two_desc_en']; // Вывод значения для английского языка
							// Добавьте здесь необходимые строки для других значений на английском языке
						} elseif ($current_language == 'ru') { // Если текущий язык - русский
							echo $top_cars['number_two_desc_ru']; // Вывод значения для русского языка
						} else {
							echo $top_cars['number_two_desc_en']; // Вывод значения по умолчанию
						}
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<!--
	<img data-aos="fade-up" data-aos-delay="600" class="buy_a_car-img"
		src="<?php echo get_template_directory_uri(); ?>/img/tg_image_11643591.jpeg" alt="<?php
		   $current_language = pll_current_language(); // Получение текущего языка
		   if ($current_language == 'en') { // Если текущий язык - английский
		   	echo 'Sport car in Dubai'; // Вывод значения для английского языка
		   	// Добавьте здесь необходимые строки для других значений на английском языке
		   } elseif ($current_language == 'ru') { // Если текущий язык - русский
		   	echo 'Аренда спорткара Дубай'; // Вывод значения для русского языка
		   } else {
			   echo 'Sport car in Dubai'; // Вывод значения по умолчанию
		   } ?> " />

	-->

	<?php get_footer() ?>
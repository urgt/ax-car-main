<?php get_header(); ?>
<main class="buy-archive__main">
	<section class="page_title"
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/buy_car.jpg)">
		<div class="page_title_block">
			<div class="page_title_text" data-aos="fade-up" data-aos-delay="200">
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
			<div class="breadcrums" data-aos="fade-up" data-aos-delay="300">
				<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '<span><a href="/">Home</a></span>
              <span>Buy a car</span>';

				} elseif ($current_language == 'ru') {
					echo '<span><a href="/ru/">Главная</a></span>
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
	<section class="main_page_catalog">
		<div class="main_page_catalog_inner container">
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {
				echo '<div class="section_subtitle luxury" data-aos="fade-up"
				 data-aos-delay="200">Our Collection</div>
            <div class="section_title" data-aos="fade-up"
				 data-aos-delay="300"><h1>Luxury Cars in Dubai</h1></div>
            ';

			} elseif ($current_language == 'ru') {
				echo '<div class="section_subtitle luxury" data-aos="fade-up"
				 data-aos-delay="200">Наша коллекция</div>
            <div class="section_title" data-aos="fade-up"
				 data-aos-delay="300"><h1>Элитные автомобили в Дубае</h1></div>
            ';
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
            </div>';
			}
			?>

			<div class="section_description new_section_description">
				<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo 'Our experienced team offers personalized consultations, guiding you through the process and helping you find the right vehicle to meet your specific requirements for your comfort.';

				} elseif ($current_language == 'ru') {
					echo 'Наша опытная команда предлагает индивидуальные консультации, сопровождая вас на протяжении всего процесса и помогая вам найти подходящий автомобиль, отвечающий вашим конкретным требованиям к вашему комфорту.';
				} else {
					echo 'Our experienced team offers personalized consultations, guiding you through the process and helping you find the right vehicle to meet your specific requirements for your comfort.';
				} ?>

			</div>

			<div class="tabs">
				<div class="tab active">
					<?php
					$current_language = pll_current_language();
					if ($current_language == 'en') {
						echo 'BRANDS';

					} elseif ($current_language == 'ru') {
						echo 'БРЕНДЫ';
					} else {
						echo 'BRANDS';
					}
					?>
				</div>
				<div class="tab">
					<?php
					$current_language = pll_current_language();
					if ($current_language == 'en') {
						echo 'CATEGORY';

					} elseif ($current_language == 'ru') {
						echo 'КАТЕГОРИИ';
					} else {
						echo 'CATEGORY';
					} ?>
				</div>
			</div>

			<div class="tab-content">
				<div class="content-tab active">

					<section class="logos_section brands" id="brands" style="padding-top:0px;">
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/porsche/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/porsche/';
						} else {
							echo '/buy_brands/porsche/';
						}
						?>"><img width="100" style="padding-top:2px;" data-aos="fade-up" data-aos-delay="50"
								src="<?php echo get_template_directory_uri(); ?>/img/Porsche11.svg"
								alt="Ax motors Porsche" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/mercedes-benz/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/mercedes-benz/';
						} else {
							echo '/buy_brands/mercedes-benz/';
						}
						?>"><img width="100" data-aos="fade-up" data-aos-delay="150"
								src="<?php echo get_template_directory_uri(); ?>/img/Mercedes11.svg"
								alt="Ax motors Mercedes Benz" /></a>
						<a class="brand" class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/bentley/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/bentley/';
						} else {
							echo '/buy_brands/bentley/';
						}
						?>" style="padding-top:10px"><img width="150" data-aos="fade-up" data-aos-delay="250"
								src="<?php echo get_template_directory_uri(); ?>/img/Bentley11.svg"
								alt="Ax motors Bentley" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/bmw/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/bmw/';
						} else {
							echo '/buy_brands/bmw/';
						}
						?>"><img width="100" data-aos="fade-up" data-aos-delay="350"
								src="<?php echo get_template_directory_uri(); ?>/img/BMW11.svg"
								alt="Ax motors BMW" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/lamborghini/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/lamborghini/';
						} else {
							echo '/buy_brands/lamborghini/';
						}
						?>"><img width="75" style="padding-top:15px" data-aos="fade-up" data-aos-delay="450"
								src="<?php echo get_template_directory_uri(); ?>/img/Lamborghini.svg"
								alt="Ax motors Lamborghini" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/mclaren/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/mclaren/';
						} else {
							echo '/buy_brands/mclaren/';
						}
						?>" style="padding-top:2px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Mclaren22.svg"
								alt="Ax motors Mclaren" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/rolls-royce/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/rolls-royce/';
						} else {
							echo '/buy_brands/rolls-royce/';
						}
						?>" style="padding-top:5px;"><img width="75" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Rolls Royce11.svg"
								alt="Ax motors Rolls Roys" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/ferrari/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/ferrari/';
						} else {
							echo '/buy_brands/ferrari/';
						}
						?>" style="padding-top:3px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Ferrari11.svg"
								alt="Ax motors Ferrari" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/land-rover/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/land-rover/';
						} else {
							echo '/buy_brands/land-rover/';
						}
						?>" style="padding-top:12px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Land Rover11.svg"
								alt="Ax motors Land Rover" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/cadillac/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/cadillac/';
						} else {
							echo '/buy_brands/cadillac/';
						}
						?>" style="padding-top:7px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Cadillac22.svg"
								alt="Ax motors Cadillac" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/jaguar/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/jaguar/';
						} else {
							echo '/buy_brands/jaguar/';
						}
						?>" style="padding-top:15px"><img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Jaguar11.svg" alt="Jaguar" /></a>
						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/audi/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/audi/';
						} else {
							echo '/buy_brands/audi/';
						}
						?>" style="padding-top:13px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Audi11.svg"
								alt="Ax motors Audi" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/bugatti/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/bugatti/';
						} else {
							echo '/buy_brands/bugatti/';
						}
						?>" style="padding-top:5px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Bugatti11 (1).svg"
								alt="Ax motors Bugatti" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/lotus/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/lotus/';
						} else {
							echo '/buy_brands/lotus/';
						}
						?>" style="padding-top:20px">
							<img width="80" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Lotus11.svg"
								alt="Ax motors Lotus" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/lincoln/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/lincoln/';
						} else {
							echo '/buy_brands/lincoln/';
						}
						?>" style="padding-top:17px">
							<img width="80" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Lincoln11.svg"
								alt="Ax motors Lincoln" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/maserati/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/maserati/';
						} else {
							echo '/buy_brands/maserati/';
						}
						?>" style="padding-top:15px">
							<img width="75" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Layer_17 (3).svg"
								alt="Ax motors Maserati" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/corvette/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/corvette/';
						} else {
							echo '/buy_brands/corvette/';
						}
						?>" style="padding-top:16px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Corvette11.svg"
								alt="Ax motors Corvette" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/mini/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/mini/';
						} else {
							echo '/buy_brands/mini/';
						}
						?>" style="padding-top:20px">
							<img width="100" data-aos="fade-up" data-aos-delay="550"
								src="<?php echo get_template_directory_uri(); ?>/img/Mini11.svg"
								alt="Ax motors Mini" /></a>

						<a class="brand" href="<?php
						$current_language = pll_current_language();
						if ($current_language == 'en') {
							echo '/buy_brands/aston-martin/';

						} elseif ($current_language == 'ru') {
							echo '/ru/buy_brands/aston-martin';
						} else {
							echo '/buy_brands/aston-martin/';
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
							$current_language = pll_current_language();
							if ($current_language == 'en') {
								echo '/buy_a_car';

							} elseif ($current_language == 'ru') {
								echo '/ru/buy_a_car';
							} else {
								echo '/buy_a_car';
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/alcars.png"
									alt="All cars" /><br>
								<?php
								$current_language = pll_current_language();
								if ($current_language == 'en') {
									echo 'All cars';

								} elseif ($current_language == 'ru') {
									echo 'Все авто';
								} else {
									echo 'All cars';
								}
								?>
							</a>
						</div>

						<div style="text-align:center;">
							<a href="<?php
							$current_language = pll_current_language();
							if ($current_language == 'en') {
								echo '/buy_class/business-class';

							} elseif ($current_language == 'ru') {
								echo '/ru/buy_class/business-class';
							} else {
								echo '/buy_class/business-class';
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/businessclass.png"
									alt="Business class" /><br>
								<?php
								$current_language = pll_current_language();
								if ($current_language == 'en') {
									echo 'Business class';

								} elseif ($current_language == 'ru') {
									echo 'Бизнес класс';
								} else {
									echo 'Business class';
								}
								?>
							</a>
						</div>

						<div style="text-align:center;">
							<a href="<?php
							$current_language = pll_current_language();
							if ($current_language == 'en') {
								echo '/buy_class/middle-class';

							} elseif ($current_language == 'ru') {
								echo '/ru/buy_class/middle-class';
							} else {
								echo '/buy_class/middle-class';
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/middleclass.png"
									alt="Middle class" /><br>
								<?php
								$current_language = pll_current_language();
								if ($current_language == 'en') {
									echo 'Middle class';

								} elseif ($current_language == 'ru') {
									echo 'Средний класс';
								} else {
									echo 'Middle class';
								}
								?>
							</a>
						</div>

						<div style="text-align:center;">
							<a href="<?php
							$current_language = pll_current_language();
							if ($current_language == 'en') {
								echo '/buy_class/sport-cars';

							} elseif ($current_language == 'ru') {
								echo '/ru/buy_class/sport-cars';
							} else {
								echo '/buy_class/sport-cars';
							}
							?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/sportcars.png"
									alt="Sport cars" /><br>
								<?php
								$current_language = pll_current_language();
								if ($current_language == 'en') {
									echo 'Sport cars';

								} elseif ($current_language == 'ru') {
									echo 'Спорткары';
								} else {
									echo 'Sport cars';
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


						<div data-aos="fade-up" data-aos-delay="100" class="main_page_catalog_cards_card-wrap">

							<a href="<?php the_permalink(); ?>" class="main_page_catalog_cards_card"
								style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">

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
		<div class="section_description" data-aos="fade-up" data-aos-delay="450">
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
		<div class="section_subtitle luxury" data-aos="fade-up" data-aos-delay="100">
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
		<div class="section_title" data-aos="fade-up" data-aos-delay="250">
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

		<div class="info_cards" data-aos="fade-up" data-aos-delay="400">
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
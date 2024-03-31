<?php get_header(); ?>
<main>
	<section class="page_title"
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/Section-minl.jpg)">
		<div class="page_title_block">
			<div class="page_title_text"  >
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
			<div class="breadcrums" >
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
	<section class="main_page_catalog">
		<div class="main_page_catalog_inner container">
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {
				echo '<div class="section_subtitle luxury" 
				 >Our Collection</div>
            <div class="section_title" 
				><h1>Luxury Cars in Dubai</h1></div>
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
				><h1>Luxury Cars in Dubai</div>
            <div class="section_description" 
				 >
              Our fleet features 2021 to 2023 cars, which are in excellent
              technical condition. We will deliver the chosen car to any
              convenient location in Dubai within 3 hours.
            </div>';
			}
			?>



			<div class="catalog_filter_block" >


				<?php //echo do_shortcode( '[searchandfilter post_types="cars" fields="brands,class,price,color,number-of-seats"]') ?>
				<?php //echo do_shortcode( '[searchandfilter post_types="cars" fields="brands,class,price,color,number-of-seats"]') 
				
				//echo   do_shortcode('[searchandfilter id="58"]')?>
				<?php //do_action('show_beautiful_filters'); ?>
			</div>



			<section class="logos_section brands" id="brands">
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/porsche/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/porsche/';
				} else {
					echo '/brands/porsche/';
				}
				?>"><img   src="<?php echo get_template_directory_uri(); ?>/img/Group.svg"
						alt="Ax cars Porsche" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/mercedes-benz/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/mercedes-benz/';
				} else {
					echo '/brands/mercedes-benz/';
				}
				?>"><img   src="<?php echo get_template_directory_uri(); ?>/img/Vector.svg"
						alt="Ax cars Mercedes Benz" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/bentley/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/bentley/';
				} else {
					echo '/brands/bentley/';
				}
				?>" style="padding-top:20px"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/bentley.svg" alt="Ax cars Bentley" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/bmw/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/bmw/';
				} else {
					echo '/brands/bmw/';
				}
				?>"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/Group 37565.svg" alt="Ax cars BMW" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/lamborghini/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/lamborghini/';
				} else {
					echo '/brands/lamborghini/';
				}
				?>"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/Lamborghini.svg"
						alt="Ax cars Lamborghini" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/mclaren/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/mclaren/';
				} else {
					echo '/brands/mclaren/';
				}
				?>" style="padding-top:30px"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/telegram-cloud-document-2-5289586991954931989 1f.svg"
						alt="Ax cars Rolls Roys" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/ferrari/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/ferrari/';
				} else {
					echo '/brands/ferrari/';
				}
				?>" style="padding-top:10px"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/Group 26503f.svg"
						alt="Ax cars Rolls Roys" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/land-rover/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/land-rover/';
				} else {
					echo '/brands/land-rover/';
				}
				?>" style="padding-top:15px"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/telegram-cloud-document-2-5289586991954932021 1f.svg"
						alt="Ax cars Rolls Roys" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/cadillac/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/cadillac/';
				} else {
					echo '/brands/cadillac/';
				}
				?>" style="padding-top:25px"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/Mask groupf.svg"
						alt="Ax cars Rolls Roys" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/jaguar/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/jaguar/';
				} else {
					echo '/brands/jaguar/';
				}
				?>" style="padding-top:15px"><img  
						src="<?php echo get_template_directory_uri(); ?>/img/telegram-cloud-document-2-5289586991954932026 1f.svg"
						alt="Ax cars Rolls Roys" /></a>
				<a href="<?php
				$current_language = pll_current_language();
				if ($current_language == 'en') {
					echo '/brands/audi/';

				} elseif ($current_language == 'ru') {
					echo '/ru/brands/audi/';
				} else {
					echo '/brands/audi/';
				}
				?>" style="padding-top:10px">
					<img  
						src="<?php echo get_template_directory_uri(); ?>/img/telegram-cloud-document-2-5289586991954932041 1f.svg"
						alt="Ax cars Rolls Roys" /></a>
			</section>


			<div class="main_page_catalog_cards" >

				<?php
				// проверяем есть ли посты в глобальном запросе - переменная $wp_query
				if (have_posts()) {
					// перебираем все имеющиеся посты и выводим их
					while (have_posts()) {
						the_post();
						?>


						<div >

							<a href="<?php the_permalink(); ?>" class="main_page_catalog_cards_card" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				')">


							</a>
							<div class="buy_info">

								<div class="buy_car_title">
									<?php the_title(); ?>
								</div>
								<div class="buy_car_price">
									<?php
									$terms = get_the_terms($post->ID, 'buy_price');
									echo number_format($terms[0]->name, 0, '.', ' ');
									?> EUR
								</div>

							</div>
						</div>

						<?php
					}
					?>
				</div>
				<div style="clear:both"></div>
				<div class="navigation" style="margin-top:0px">
					<div class="next-posts">
						<?php next_posts_link(); ?>
					</div>
					<div class="prev-posts">
						<?php previous_posts_link(); ?>
					</div>
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
				<a href="https://wa.me/+971556702309">
					<img src="<?php echo get_template_directory_uri(); ?>/img/akar-icons_whatsapp-fill.svg"
						alt="contact us right now via whatsapp" />
					<span class="luxury">WHATSAPP</span>
				</a>
			</div>
		</div>
	</section>

	<section class="how_it_works container">
		<div class="section_subtitle luxury" >
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
		<div class="section_title"  >
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

		<div class="info_cards"  >
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
		<div class="section_subtitle luxury" >
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
		<div class="section_title"  >
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

		<div class="steps_text"  >
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
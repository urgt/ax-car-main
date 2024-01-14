<?php get_header(); ?>
      <main>
        <section
          class="page_title"
          style="background-image: url(https://st.sarmag.ru/wp-content/themes/ax-car-main/img/Sectiondd-min.jpeg)"
        >
          <div class="page_title_block">
            <div class="page_title_text" data-aos="fade-up"
				 data-aos-delay="100"><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Buy a car'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Купить авто'; // Вывод значения для русского языка
    		} else{
        	echo 'Buy a car'; // Вывод значения по умолчанию
    		}	
			?></div>
            <div class="breadcrums" data-aos="fade-up"
				 data-aos-delay="200"><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo '<span>Home</span>
              <span>Buy a car</span>'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo '<span>Главная</span>
              <span>Купить авто</span>'; // Вывод значения для русского языка
    		} else{
        	echo '<span>Home</span>
              <span>Buy a car</span>'; // Вывод значения по умолчанию
    		}	
			?>
            </div>
          </div>
          <div class="background_overlay"></div>
        </section>

        <section class="buy_a_car_form container">
          <div class="section_title" data-aos="fade-up"
				 data-aos-delay="300"><h2>
			  <?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('section_title_en'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('section_title_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('section_title_en'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?>
			  </h2></div>
          <div class="section_description" data-aos="fade-up"
				 data-aos-delay="450">
    <?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('section_description_en'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('section_description_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('section_description_en'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?>
          </div>
          <div class="buy_a_car_form_wrapper">
			
            <form class="get_consultation_form" data-aos="fade-up"
				 data-aos-delay="600" method="POST" action="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo home_url('/mailer'); // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'https://axluxurycars.ae/ru/mailer'; // Вывод значения для русского языка
    		} else{
        	echo home_url('/mailer'); // Вывод значения по умолчанию
    		}	
			?>">
              <input 
					 required
				name="yourname" 
                type="text"
                class="get_consultation_first_name"
                placeholder="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'First Name'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Ваше имя'; // Вывод значения для русского языка
    		} else{
        	echo 'First Name'; // Вывод значения по умолчанию
    		}	
			?>"
              />
              <input
				required
				name="lastname"
                type="text"
                class="get_consultation_last_name"
                placeholder="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Last Name'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Фамилия'; // Вывод значения для русского языка
    		} else{
        	echo 'Last Name'; // Вывод значения по умолчанию
    		}	
			?>"
              />
              <input 
				required
				name="number" 
                type="tel"
                class="get_consultation_phone_number"
                placeholder="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Phone Number'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Номер телефона'; // Вывод значения для русского языка
    		} else{
        	echo 'Phone Number'; // Вывод значения по умолчанию
    		}	
			?>"
              />
              <input
				required
				name="email"
                type="email"
                class="get_consultation_email"
                placeholder="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Email'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Электронная почта'; // Вывод значения для русского языка
    		} else{
        	echo 'Email'; // Вывод значения по умолчанию
    		}	
			?>"
              />
              <button class="button new"><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'SEND'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Отправить'; // Вывод значения для русского языка
    		} else{
        	echo 'SEND'; // Вывод значения по умолчанию
    		}	
			?></button>
            </form>
            <div class="contact_whatsapp" data-aos="fade-up"
				 data-aos-delay="600">
              <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Or contact us right now via'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Или свяжитесь с нами через'; // Вывод значения для русского языка
    		} else{
        	echo 'Or contact us right now via'; // Вывод значения по умолчанию
    		}	
			?>
              <a href="https://wa.me/+971556702309">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/akar-icons_whatsapp-fill.svg"
                  alt="contact us right now via whatsapp"
                />
                <span class="luxury">WHATSAPP</span>
              </a>
            </div>
          </div>
        </section>
		  
		<section class="how_it_works container">
          <div class="section_subtitle luxury" data-aos="fade-up"
				 data-aos-delay="100"><?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['section_subtitle_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['section_subtitle_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['section_subtitle_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
          <div class="section_title" data-aos="fade-up"
				 data-aos-delay="250"><?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['section_title_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['section_title_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['section_title_en']; // Вывод значения по умолчанию
    }
endif;
?></div>

          <div class="info_cards" data-aos="fade-up"
				 data-aos-delay="400">
            <div class="info_cards_card">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Location (1).svg" alt="Quick response" />
              <div class="info_cards_card_title"><?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['learn_conditions_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['learn_conditions_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['learn_conditions_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
              <p class="info_cards_card_description">
                <?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['read_the_terms_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['read_the_terms_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['read_the_terms_en']; // Вывод значения по умолчанию
    }
endif;
?>
              </p>
            </div>
            <div class="info_cards_card">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Location (2).svg" alt="Quick response" />
              <div class="info_cards_card_title"><?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['choose_a_car_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['choose_a_car_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['choose_a_car_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
              <p class="info_cards_card_description">
                <?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['choose_from_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['choose_from_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['choose_from_en']; // Вывод значения по умолчанию
    }
endif;
?>
              </p>
            </div>
            <div class="info_cards_card">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Locationono.svg" alt="Quick response" />
              <div class="info_cards_card_title"><?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['fill_in_the_form_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['fill_in_the_form_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['fill_in_the_form_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
              <p class="info_cards_card_description">
                <?php
$top_cars = get_field('how_it_works_two');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['complete_the_form_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['complete_the_form_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['complete_the_form_en']; // Вывод значения по умолчанию
    }
endif;
?>
              </p>
            </div>
          </div>
        </section>  
		  

        <section class="steps_buy_car container" style="display:none;">
          <div class="section_subtitle luxury" data-aos="fade-up"
				 data-aos-delay="100"><?php
$top_cars = get_field('how_it_works');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['section_subtitle_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['section_subtitle_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['section_subtitle_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
          <div class="section_title" data-aos="fade-up"
				 data-aos-delay="250"><?php
$top_cars = get_field('how_it_works');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['section_title_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['section_title_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['section_title_en']; // Вывод значения по умолчанию
    }
endif;
?></div>

          <div class="steps_text" data-aos="fade-up"
				 data-aos-delay="400">
            <div class="steps_text_block">
              <div class="section_title"><?php
$top_cars = get_field('how_it_works');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['easy_steps_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['easy_steps_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['easy_steps_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
              <div class="section_description">
                <?php
$top_cars = get_field('how_it_works');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['you_can_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['you_can_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['you_can_en']; // Вывод значения по умолчанию
    }
endif;
?>
              </div>
            </div>
            <div class="steps_text_block">
              <div class="steps_text_top">
                <div class="number">01</div>
                <p><?php
$top_cars = get_field('how_it_works');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['number_one_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['number_one_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['number_one_en']; // Вывод значения по умолчанию
    }
endif;
?></p>
              </div>
              <hr />
              <div class="section_description">
  <?php
$top_cars = get_field('how_it_works');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['number_one_desc_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['number_one_desc_ru']; // Вывод значения для русского языка
    } else{
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
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['number_two_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['number_two_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['number_two_en']; // Вывод значения по умолчанию
    }
endif;
?></p>
              </div>
              <hr />
              <div class="section_description">
  <?php
$top_cars = get_field('how_it_works');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['number_two_desc_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['number_two_desc_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['number_two_desc_en']; // Вывод значения по умолчанию
    }
endif;
?>
              </div>
            </div>
          </div>
        </section>
        <img
			 data-aos="fade-up"
				 data-aos-delay="600"
          class="buy_a_car-img"
          src="<?php echo get_template_directory_uri(); ?>/img/tg_image_11643591.jpeg"
          alt="<?php 
			   $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo 'Sport car in Dubai'; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo 'Аренда спорткара Дубай'; // Вывод значения для русского языка
    } else{
        echo 'Sport car in Dubai'; // Вывод значения по умолчанию
    }?> "
        />

        

<?php get_footer() ?>
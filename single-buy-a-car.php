<?php get_header(); ?>
      <main>
        

        <div class="car_details container">
          <div class="car_details_inner">
            <div class="car_details_content">
				
			<div class="car_slider">
                <!-- Swiper -->
				
				
				
				

                <div
                  style="
                    --swiper-navigation-color: #fff;
                    --swiper-pagination-color: #fff;
                  "
                  class="swiper mySwiper2"
                >
                  <div class="swiper-wrapper">
					  
				<?php 
$images = get_field('buy_gallery');
if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Buy'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Купить'; // Вывод значения для русского языка
    		} else{
        	echo 'Buy'; // Вывод значения по умолчанию
    		}	
			?> <?php the_title(); ?> <?php
$terms = get_the_terms( $post->ID, 'buy_colors' );
$colors = array();
foreach ( $terms as $term ) {
    $colors[] = $term->name;
}
echo implode(', ', $colors);
?>" />
                </div>
            <?php endforeach; ?>
<?php endif; ?>	  
					  
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    
                  </div>
                </div>
              </div>	
              <div class="car_details_price">
                <div class="car_details_title"><?php the_title(); ?></div>
                <div class="car_details_cost"><span class="car_details_pricee"><?php	
        $terms = get_the_terms( $post->ID, 'buy_price' );
					echo number_format($terms[0]->name, 0, '.', ' ');
        
 		?> </span> <span>AED</span><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo ''; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo ''; // Вывод значения для русского языка
    		} else{
        	echo ''; // Вывод значения по умолчанию
    		}	
			?></div>
              </div>
              <hr />
              <div class="car_details_info">
                <div class="block_title"><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Car Information'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Детальная информация'; // Вывод значения для русского языка
    		} else{
        	echo 'Car Information'; // Вывод значения по умолчанию
    		}	
			?></div>

                <div class="car_details_info_items">
                  <div class="car_details_items_wrapper">
                    <ul class="car_details_info_property_names">
						<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo '
                      <li>
                        <span>Class</span>
                      </li>
                      <li>
                        <span>Mileage</span>
                      </li>

                      <li>
                        <span>First registration</span>
                      </li>

                      <li>
                        <span>Fuel</span>
                      </li>
					  '; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo '
                      <li>
                        <span>Класс</span>
                      </li>
                      <li>
                        <span>Пробег</span>
                      </li>

                      <li>
                        <span>Первая регистрация</span>
                      </li>

					  <li>
                        <span>Топливо</span>
                      </li>
                      '; // Вывод значения для русского языка
    		} else{
        	echo '
                      <li>
                        <span>Class</span>
                      </li>
                      <li>
                        <span>Fuel</span>
                      </li>
                      <li>
                        <span>Transmission</span>
                      </li>
                      <li>
                        <span>Engine</span>
                      </li>
                      '; // Вывод значения по умолчанию
    		}	
			?>
                    </ul>
                    <ul class="car_details_info_property_values">
                      <li>
                        <span> <?php	
        $terms = get_the_terms( $post->ID, 'buy_class' );
        foreach ( $terms as $term ) {
            echo $term->name;
        }
 		?></span>
                      </li>
                      <li>
                        <span> <?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('buy_mileage'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('buy_mileage_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('buy_mileage'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?></span>
                      </li>
                      
                    
                      <li>
                        <span> 
							<?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('buy_first_registration'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('buy_first_registration_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('buy_first_registration'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?></span>
                      </li>
						 
						<li>
                        <span> 
							<?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('buy_fuel'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('buy_fuel_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('buy_fuel'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?></span>
                      </li>
						
						
                    </ul>
                  </div>
                  <div class="car_details_items_wrapper">
                    <ul class="car_details_info_property_names">
						<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo '<li>
                        <span>Engine</span>
                      </li>
                     <li>
                        <span>Color</span>
                      </li>
					  <li>
                        <span>Transmission</span>
                      </li>
					  '; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo '<li>
                        <span>Двигатель</span>
                      </li>
                      
                      <li>
                        <span>Цвет</span>
                      </li>
					  <li>
                        <span>Коробка передач</span>
                      </li>
					 '; // Вывод значения для русского языка
    		} else{
        	echo '<li>
                        <span>Year</span>
                      </li>
                      <li>
                        <span>Bags</span>
                      </li>
                      <li>
                        <span>Color</span>
                      </li>
                      <li>
                        <span>Doors</span>
                      </li>'; // Вывод значения по умолчанию
    		}	
			?>
                      
                    </ul>
                    <ul class="car_details_info_property_values">
                      <li>
                        <span> 
							<?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('buy_engine'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('buy_engine_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('buy_engine'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?></span>
                      </li>
                     
						<li>
                        <span> <?php
$terms = get_the_terms( $post->ID, 'buy_colors' );
$colors = array();
foreach ( $terms as $term ) {
    $colors[] = $term->name;
}
echo implode(', ', $colors);
?>
</span>
                      </li>
						<li>
                        <span> 
							<?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('buy_transmission'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('buy_transmission_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('buy_transmission'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <hr />
              <div class="car_details_desc">
                <div class="block_title">
					<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Car Description'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Описание авто'; // Вывод значения для русского языка
    		} else{
        	echo 'Car Description'; // Вывод значения по умолчанию
    		}	
			?></div>
                <p>
                 <?php the_content(); ?></p>
				  <p>
					  <?php // display_converted_price(); ?>
				  </p>
                <a href="#" class="button mainform">
                  <span>
					  <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'BOOK NOW'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Забронировать'; // Вывод значения для русского языка
    		} else{
        	echo 'BOOK NOW'; // Вывод значения по умолчанию
    		}	
			?></span>
                </a>
              </div>
            </div>
            <div class="car_details_sidebar">
              <div class="car_details_sidebar_gallery">
                <div class="block_title"> <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Car Information'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Информация об авто'; // Вывод значения для русского языка
    		} else{
        	echo 'Car Information'; // Вывод значения по умолчанию
    		}	
			?></div>
                <div class="car_details_sidebar_gallery_imgs">
				<?php 
$images = get_field('buy_gallery');
if( $images ): ?>
        <?php foreach( $images as $image ): ?>
                <a href="<?php echo esc_url($image['url']); ?>" class="foobox" rel="gallery">
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"/>
                </a>
        <?php endforeach; ?>
    
<?php endif; ?>
                </div>
              </div>
              <div class="car_details_sidebar_consultant">
                <div class="consultant_info">
					<?php if( get_field('buy_consultant_photo') ): ?>
    <img src="<?php the_field('buy_consultant_photo'); ?>" />
<?php endif; ?>
                  <div class="consiltant_info_name">
                    <p>
						<?php
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ 
		$cars_fleet = get_field('buy_consultant'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        $cars_fleet = get_field('buy_consultant_ru'); // Если текущий язык - английский
        echo $cars_fleet; // Вывод значения для русского языка
    } else{
        $cars_fleet = get_field('buy_consultant'); // Если текущий язык - английский
        echo $cars_fleet;// Вывод значения по умолчанию
    }
?>
                    
                  </div>
                </div>
                <div class="consultant_buttons">
                  <a href="tel:+971585893990" class="button">
                    <span><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Call us'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Позвонить'; // Вывод значения для русского языка
    		} else{
        	echo 'Call us'; // Вывод значения по умолчанию
    		}	
			?></span>
                  </a>
                  <a class="mainform button">
                    <span><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'INQUIRY'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Написать'; // Вывод значения для русского языка
    		} else{
        	echo 'INQUIRY'; // Вывод значения по умолчанию
    		}	
			?></span>
                  </a>
                </div>

                <div class="contact_whatsapp">
                  <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Or get availability via'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Свяжитесь с нами через'; // Вывод значения для русского языка
    		} else{
        	echo 'Or get availability via'; // Вывод значения по умолчанию
    		}	
			?>
                  <a href="https://wa.me/+971585893990">
                    <img
                      src="https://st.sarmag.ru/wp-content/themes/ax-car-main/img/akar-icons_whatsapp-fill.svg"
                      alt="contact us right now via whatsapp"
                    />
                    <span class="luxury">WHATSAPP</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php get_footer() ?> 
<?php get_header(); ?>
      <main>
        <section class="hero_section">
          <div class="hero_content container">
            <h1 class="hero_title"
				data-aos="fade-up"
				
				><?php the_title(); ?></h1>
            <div class="hero_subtitle"
				 data-aos="fade-up"
				 data-aos-delay="100"
				 >
              <?php the_content(); ?>
            </div>
			
			  <div style="display:flex;">
				<a href="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo '/cars'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo '/ru/cars'; // Вывод значения для русского языка
    		} else{
        	echo '/cars'; // Вывод значения по умолчанию
    		}	
			?>" class="button"
			   data-aos="fade-up"
				 data-aos-delay="200"
			   style="margin-right:30px; padding: 20px 15px;">
              <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'RENT A CAR'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Аренда авто'; // Вывод значения для русского языка
    		} else{
        	echo 'FIND YOUR CAR'; // Вывод значения по умолчанию
    		}	
			?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
            </a>
			  
			<a href="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo '/buy_a_car'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo '/ru/buy_a_car'; // Вывод значения для русского языка
    		} else{
        	echo '/cars'; // Вывод значения по умолчанию
    		}	
			?>" class="button"
			   data-aos="fade-up"
				 data-aos-delay="200"
			   style="padding: 20px 15px;"
			   >
              <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Buy A CAR'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Купить авто'; // Вывод значения для русского языка
    		} else{
        	echo 'FIND YOUR CAR'; // Вывод значения по умолчанию
    		}	
			?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
            </a>  
          
			</div>
			  
			</div>
			
        </section>

        <section class="about_ax_cars">
          <div class="about_ax_cars_content container">
            <div class="about_ax_cars_content_left"></div>
            <div class="about_ax_cars_content_right">
              <div class="about_ax_cars_content_top">
                <div class="section_subtitle luxury"
					 
					  data-aos="fade-up"
					 
					 >
		  
				  
<?php
$top_cars = get_field('top_cars');
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
?>
</div>
                <div class="section_title"
					  data-aos="fade-up"
					 data-aos-delay="100"
					 ><h2>
					
					<?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['section_title_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['section_title_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['tsection_title_en']; // Вывод значения по умолчанию
    }
endif;
?>
					</h2>
</div>
                <div class="section_description"
					 data-aos="fade-up"
					 data-aos-delay="200"
					 >
	<?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['section_description_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['section_description_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['section_description_en']; // Вывод значения по умолчанию
    }
endif;
?>	
                </div>
              </div>
              <div class="about_ax_cars_content_bottom"
				   data-aos="fade-up"
					 data-aos-delay="300"
				   >
                <div class="about_ax_cars_content_bottom_card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gnew.svg" alt="Quick response" />
                  <div class="about_ax_cars_content_bottom_card_title">
                    <?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['quick_response_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['quick_response_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['quick_response_en']; // Вывод значения по умолчанию
    }
endif;
?>	
                  </div>
                  <p class="about_ax_cars_content_bottom_card_description">
                    <?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['quick_response_desc_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['quick_response_desc_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['quick_response_desc_en']; // Вывод значения по умолчанию
    }
endif;
?>	
                  </p>
                </div>
                <div class="about_ax_cars_content_bottom_card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/fast.svg" alt="Fast delivery" />
                  <div class="about_ax_cars_content_bottom_card_title">
                    <?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['fast_delivery_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['fast_delivery_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['fast_delivery_en']; // Вывод значения по умолчанию
    }
endif;
?>	
                  </div>
                  <p class="about_ax_cars_content_bottom_card_description">
                   <?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['fast_delivery_desc_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['fast_delivery_desc_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['fast_delivery_desc_en']; // Вывод значения по умолчанию
    }
endif;
?>	
                  </p>
                </div>
                <div class="about_ax_cars_content_bottom_card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/any loc.svg" alt="Any location" />
                  <div class="about_ax_cars_content_bottom_card_title">
                    <?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['any_location_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['any_location_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['any_location_en']; // Вывод значения по умолчанию
    }
endif;
?>	
                  </div>
                  <p class="about_ax_cars_content_bottom_card_description">
                   <?php
$top_cars = get_field('top_cars');
if( $top_cars ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $top_cars['any_location_desc_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $top_cars['any_location_desc_ru']; // Вывод значения для русского языка
    } else{
        echo $top_cars['any_location_desc_en']; // Вывод значения по умолчанию
    }
endif;
?>
                  </p>
                </div>
              </div>
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/Fotoju-min.png"
                alt="Top cars for you"
                class="mobile_foto container"
              />
            </div>
          </div>
        </section>

        <section class="main_page_catalog">
          <div class="main_page_catalog_inner">
            <div class="section_title container"
				 data-aos="fade-up"
				 ><h2>
				<?php
$cars_fleet = get_field('cars_fleet');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_title_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_title_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_title_en']; // Вывод значения по умолчанию
    }
endif;
?>
				</h2></div>
            <div class="section_description container"
				 data-aos="fade-up"
				 data-aos-delay="100"
				 >
              <?php
$cars_fleet = get_field('cars_fleet');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_description_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_description_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_description_en']; // Вывод значения по умолчанию
    }
endif;
?>

            </div>
			  
			<?php 
			  
			// echo do_shortcode( '[searchandfilter post_types="cars" fields="brands,class,price,color,number-of-seats"]'
			// ?>
			  
			  
            <div class="main_page_catalog_cards container"
				 >
				
	<?php
    $queryArgs = [
        // your post type here
        'post_type'         => 'cars',
        // target post status
        'post_status'       => 'publish',
        // maximum amount of posts, use -1 to set unlimited
        'posts_per_page' => 4,
        // type of order
        'order'         => 'DESC',
        // order field
        'orderby'       => 'date',
        
    ];
 
    // SQL query will be executed during this line
    $query = new WP_Query($queryArgs);
     
    // WP_Posts array    
    $posts = $query->get_posts();
     
    
    foreach ($posts as $post) { 
        $postId         = $post->ID;       
        $title          = get_the_title($postId);       
    ?>
 
				
				<div data-aos="fade-up"
				data-aos-delay="100">
				  
		<a
                href="<?php the_permalink(); ?>"
                class="main_page_catalog_cards_card"
                style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
				')"
		   		
		   >
               
			
              </a>	  <a
                href="<?php the_permalink(); ?>">	
				  <div class="buy_info">
					  
			  <div class="buy_car_title">
					<?php the_title(); ?>
		</div>
				  <div class="buy_car_price"><?php	
        $terms = get_the_terms( $post->ID, 'price' );
        echo number_format($terms[0]->name, 0, '.', ' ');
 		?> AED</div>
					  
				  </div></a>
			  </div> 
		
<?php
};
				
				wp_reset_query();

?>
			
            </div>
          </div>
        </section>

        <section class="how_it_works container">
          <div class="section_subtitle luxury"
			   data-aos="fade-up"
			   >
			  
			  				
<?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_subtitle_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_subtitle_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_subtitle_en']; // Вывод значения по умолчанию
    }
endif;
?>
			 </div>
          <div class="section_title"
			   data-aos="fade-up"
			   data-aos-delay="100"
			   ><h2>
			  <?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_title_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_title_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_title_en']; // Вывод значения по умолчанию
    }
endif;
?>
			  </h2></div>

          <div class="info_cards">
            <div class="info_cards_card"
				 data-aos="fade-up"
				 data-aos-delay="300"
				 >
              <img src="<?php echo get_template_directory_uri(); ?>/img/Locationo.svg" alt="Quick response" />
              <div class="info_cards_card_title"><?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['learn_conditions_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['learn_conditions_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['learn_conditions_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
              <p class="info_cards_card_description">
                <?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['read_the_terms_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['read_the_terms_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['read_the_terms_en']; // Вывод значения по умолчанию
    }
endif;
?>
              </p>
            </div>
            <div class="info_cards_card"
				 data-aos="fade-up"
					 data-aos-delay="450"
				 >
              <img src="<?php echo get_template_directory_uri(); ?>/img/Location (1).svg" alt="Quick response" />
              <div class="info_cards_card_title">
				  
<?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['choose_a_car_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['choose_a_car_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['choose_a_car_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
              <p class="info_cards_card_description">
                <?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['choose_from_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['choose_from_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['choose_from_en']; // Вывод значения по умолчанию
    }
endif;
?>
              </p>
            </div>
            <div class="info_cards_card"
				 data-aos="fade-up"
					 data-aos-delay="600"
				 >
              <img src="<?php echo get_template_directory_uri(); ?>/img/Location (2).svg" alt="Quick response" />
              <div class="info_cards_card_title">
				  
<?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['fill_in_the_form_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['fill_in_the_form_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['fill_in_the_form_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
              <p class="info_cards_card_description">
 <?php
$cars_fleet = get_field('how_it_works');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['complete_the_form_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['complete_the_form_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['complete_the_form_en']; // Вывод значения по умолчанию
    }
endif;
?> 
              </p>
            </div>
          </div>
        </section>

        <section class="cta_section container">
          <div class="cta_section_left">
            <div class="section_subtitle luxury"
				 data-aos="fade-up"
				 >
<?php
$cars_fleet = get_field('buy_a_car');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_subtitle_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_subtitle_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_subtitle_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
            <div class="section_title"
				 data-aos="fade-up"
					 data-aos-delay="150"
				 ><h2>
				<?php
$cars_fleet = get_field('buy_a_car');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_title_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_title_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_title_en']; // Вывод значения по умолчанию
    }
endif;
?>
				</h2></div>
            <div class="section_description"
				  data-aos="fade-up"
					 data-aos-delay="300"
				 >
<?php
$cars_fleet = get_field('buy_a_car');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_description_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_description_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_description_en']; // Вывод значения по умолчанию
    }
endif;
?>
            </div>
            <a href="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo '/buy_a_car'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo '/ru/buy_a_car'; // Вывод значения для русского языка
    		} else{
        	echo '/buy-a-car'; // Вывод значения по умолчанию
    		}	
			?>" class="button"
			   data-aos="fade-up"
					 data-aos-delay="450"
			   >
				<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'DISCOVER MORE'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'УЗНАТЬ БОЛЬШЕ'; // Вывод значения для русского языка
    		} else{
        	echo 'DISCOVER MORE'; // Вывод значения по умолчанию
    		}	
			?>
              
              <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
            </a>
          </div>
          <div class="cta_section_right"
			   data-aos="fade-left"
					 data-aos-delay="200"
			   
			   >
            <div class="swiper mySwiper1">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/1.webp" alt="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'mercedes benz e class 2022 in Dubai'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'mercedes benz e class 2022 в Дубае'; // Вывод значения для русского языка
    		} else{
        	echo 'mercedes benz e class 2022 in Dubai'; // Вывод значения по умолчанию
    		}	
			?>" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/2.webp" alt="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'mercedes benz e class 2022 in Dubai'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'mercedes benz e class 2022 в Дубае'; // Вывод значения для русского языка
    		} else{
        	echo 'mercedes benz e class 2022 in Dubai'; // Вывод значения по умолчанию
    		}	
			?>" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/3.webp" alt="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'mercedes benz e class 2022 in Dubai'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'mercedes benz e class 2022 в Дубае'; // Вывод значения для русского языка
    		} else{
        	echo 'mercedes benz e class 2022 in Dubai'; // Вывод значения по умолчанию
    		}	
			?>" />
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </section>

        <section class="logos_section">
          <img data-aos="fade-up"
			   data-aos-delay="50"
			   src="<?php echo get_template_directory_uri(); ?>/img/Group.svg" alt="Ax cars Porsche" />
          <img data-aos="fade-up"
			   data-aos-delay="150"
			   src="<?php echo get_template_directory_uri(); ?>/img/Vector.svg" alt="Ax cars Mercedes Benz" />
          <img data-aos="fade-up"
			   data-aos-delay="250"
			   src="<?php echo get_template_directory_uri(); ?>/img/bentley.svg" alt="Ax cars Bentley" />
          <img data-aos="fade-up"
			   data-aos-delay="350"
			   src="<?php echo get_template_directory_uri(); ?>/img/Group 37565.svg" alt="Ax cars BMW" />
          <img data-aos="fade-up"
			   data-aos-delay="450"
			   src="<?php echo get_template_directory_uri(); ?>/img/Lamborghini.svg" alt="Ax cars Lamborghini" />
          <img data-aos="fade-up"
			   data-aos-delay="550"
			   src="<?php echo get_template_directory_uri(); ?>/img/Vector_Logo.svg" alt="Ax cars Rolls Roys" />
        </section>

        <section class="reviews_section">
          <div class="reviews_inner container">
            <div class="section_title"
				 data-aos="fade-up"
				 data-aos-delay="200"
				 
				 ><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['section_title_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['section_title_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['section_title_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
            <div class="reviews_block">
              <div class="review_item"
				   data-aos="fade-up"
				 data-aos-delay="350">
                <p class="review_text">
                  <?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_text_one_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_text_one_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_text_one_en']; // Вывод значения по умолчанию
    }
endif;
?>
                </p>
                <div class="review_author">
                
                  <div class="review_author_info">
                    <div class="review_author_name"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_name_one_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_name_one_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_name_one_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                    <div class="review_author_country"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_country_one_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_country_one_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_country_one_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                  </div>
                </div>
              </div>
              <div class="review_item"
				   data-aos="fade-up"
				 data-aos-delay="500"
				   >
                <p class="review_text">
<?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_text_two_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_text_two_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_text_two_en']; // Вывод значения по умолчанию
    }
endif;
?>
                </p>
                <div class="review_author">
                
                  <div class="review_author_info">
                    <div class="review_author_name"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_name_two_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_name_two_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_name_two_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                    <div class="review_author_country"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_country_two_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_country_two_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_country_two_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                  </div>
                </div>
              </div>
              <div class="review_item"
				   data-aos="fade-up"
				 data-aos-delay="650"
				   >
                <p class="review_text">
<?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_text_three_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_text_three_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_text_three_en']; // Вывод значения по умолчанию
    }
endif;
?>
                </p>
                <div class="review_author">
               
                  <div class="review_author_info">
                    <div class="review_author_name"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_name_three_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_name_three_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_name_three_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                    <div class="review_author_country"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_country_three_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_country_three_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_country_three_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                  </div>
                </div>
              </div>
              <div class="review_item"
				   data-aos="fade-up"
				 data-aos-delay="800"
				   >
                <p class="review_text">
               <?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_text_four_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_text_four_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_text_four_en']; // Вывод значения по умолчанию
    }
endif;
?>
                </p>
                <div class="review_author">
                 
                  <div class="review_author_info">
                    <div class="review_author_name"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_name_four_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_name_four_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_name_four_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                    <div class="review_author_country"><?php
$cars_fleet = get_field('reviews');
if( $cars_fleet ):
    $current_language = pll_current_language(); // Получение текущего языка
    if($current_language == 'en'){ // Если текущий язык - английский
        echo $cars_fleet['review_author_country_four_en']; // Вывод значения для английского языка
        // Добавьте здесь необходимые строки для других значений на английском языке
    } elseif($current_language == 'ru'){ // Если текущий язык - русский
        echo $cars_fleet['review_author_country_four_ru']; // Вывод значения для русского языка
    } else{
        echo $cars_fleet['review_author_country_four_en']; // Вывод значения по умолчанию
    }
endif;
?></div>
                  </div>
                </div>
              </div>
            </div>
            <a href="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo '/contact-us'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo '/ru/contact-us'; // Вывод значения для русского языка
    		} else{
        	echo '/contact-us'; // Вывод значения по умолчанию
    		}	
			?>" class="button"
			   
			   data-aos="fade-up"
				 data-aos-delay="1000">
			<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Leave a review'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Оставить отзыв'; // Вывод значения для русского языка
    		} else{
        	echo 'Leave a review'; // Вывод значения по умолчанию
    		}	
			?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/Icon.svg" alt="" />
            </a>
          </div>
        </section>

        <section class="get_consultation container">
          <div class="get_consultation_inner">
            <div class="section_title"
				 data-aos="fade-up"
				 data-aos-delay="150"
				 >
				<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Get professional consultation'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Получить профессиональную консультацию'; // Вывод значения для русского языка
    		} else{
        	echo 'Get professional consultation'; // Вывод значения по умолчанию
    		}	
			?>
				</div>
            <div class="section_description"
				 data-aos="fade-up"
				 data-aos-delay="300"
				 >
              <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Fill a form below and our consultant will contact you shortly'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Заполните форму ниже и наш консультант свяжется с вами в ближайшее время'; // Вывод значения для русского языка
    		} else{
        	echo 'Fill a form below and our consultant will contact you shortly'; // Вывод значения по умолчанию
    		}	
			?>
            </div>
            <form method="POST" action="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'https://axluxurycars.ae/mailer'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'https://axluxurycars.ae/ru/mailer'; // Вывод значения для русского языка
    		} else{
        	echo 'https://axluxurycars.ae/mailer'; // Вывод значения по умолчанию
    		}	
			?>" class="get_consultation_form"
				  data-aos="fade-up"
				 data-aos-delay="450"
				  >
              <input
				required
				name="yourname"
                type="text"
                class="get_consultation_full_name"
                placeholder="<?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Full Name'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Ваше имя'; // Вывод значения для русского языка
    		} else{
        	echo 'Full Name'; // Вывод значения по умолчанию
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
        	echo 'Эл. почта'; // Вывод значения для русского языка
    		} else{
        	echo 'Email'; // Вывод значения по умолчанию
    		}	
			?>"
              />
              <button class="button"><?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'SEND'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'ОТПРАВИТЬ'; // Вывод значения для русского языка
    		} else{
        	echo 'SEND'; // Вывод значения по умолчанию
    		}	
			?></button>
            </form>
            <div class="contact_whatsapp"
				 data-aos="fade-up"
				 data-aos-delay="550"
				 >
              <?php
			$current_language = pll_current_language(); // Получение текущего языка
    		if($current_language == 'en'){ // Если текущий язык - английский
        	echo 'Or contact us right now via'; // Вывод значения для английского языка
        	// Добавьте здесь необходимые строки для других значений на английском языке
    		} elseif($current_language == 'ru'){ // Если текущий язык - русский
        	echo 'Или напишите нам через'; // Вывод значения для русского языка
    		} else{
        	echo 'Or contact us right now via'; // Вывод значения по умолчанию
    		}	
			?>
              <a href="https://wa.me/+971527777139">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/akar-icons_whatsapp-fill.svg"
                  alt="contact us right now via whatsapp"
                />
                <span class="luxury">WHATSAPP</span>
              </a>
            </div>
          </div>
          <div class="lux_line container"
			   data-aos="fade"
			   ></div>
        </section>
		  
<?php get_footer(); ?>
<footer class="footer container">
	<div class="footer_logo">
		<img style="width:100px;" src="/wp-content/uploads/2023/12/AX_MOTORS_Logo-e1702210136781.png" alt="AX CAR" />
		<p>
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {
				echo 'AX MOTORS is a car dealing company providing luxury and
              medium-segment vehicles';

			} elseif ($current_language == 'ru') {
				echo 'AX MOTORS - компания 
по продаже автомобилей класса люкс и среднего класса.';
			} else {
				echo 'AX MOTORS is a car dealing company providing luxury and
              medium-segment vehicles';
			}
			?>

		</p>
	</div>
	<div class="footer_get_in_touch">
		<div class="footer_block_title">
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {
				echo 'Get In Touch';

			} elseif ($current_language == 'ru') {
				echo 'Свяжитесь с нами';
			} else {
				echo 'Get In Touch';
			}
			?>
		</div>
		<div>
			14th Floor,
			Westburry Office, Dubai
		</div>
		<div>
			<a href="mailto:vitalii@axmotors.ae">Vitalii@axmotors.ae</a>
		</div>
		<div>
			<a href="tel:+971585893990">+971585893990</a>
		</div>
		<div>24/7</div>
	</div>
	<div class="footer_quicklinks">
		<div class="footer_block_title">
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {
				echo 'Quicklinks';

			} elseif ($current_language == 'ru') {
				echo 'Страницы';
			} else {
				echo 'Quicklinks';
			}
			?>
		</div>
		<?php
		$current_language = pll_current_language();
		if ($current_language == 'en') {
			echo '<div><a href="/buy" class="nav_link">Buy</a></div>
			<div><a href="/sell" class="nav_link">Sell</a></div>
            <div><a href="/conditions" class="nav_link">Conditions</a></div> 
            <div><a href="/about-us" class="nav_link">About</a></div>
            <div><a href="/contact-us" class="nav_link">Contact us</a></div>';

		} elseif ($current_language == 'ru') {
			echo '<div><a href="/ru/buy" class="nav_link">Купить</a></div>
			<div><a href="/ru/sell" class="nav_link">Продать</a></div>
            <div><a href="/ru/conditions" class="nav_link">Условия</a></div>
            <div><a href="/ru/about-us" class="nav_link">О нас</a></div>
            <div><a href="/ru/contact-us" class="nav_link">Контакты</a></div>';
		} else {
			echo '
            <div><a href="/buy" class="nav_link"><li>Buy</li></a></div>
			<div><a href="/sell" class="nav_link">Sell</a></div>
			<div><a href="/conditions" class="nav_link"><li>Conditions</li></a></div>
            <div><a href="/about-us" class="nav_link"><li>About</li></a></div>
            <div><a href="/contact-us" class="nav_link"><li>Contact us</li></a></div>';
		}
		?>

	</div>

	<div class="footer_location">
		<div class="footer_block_title">
			<?php
			$current_language = pll_current_language();
			if ($current_language == 'en') {
				echo 'Location';

			} elseif ($current_language == 'ru') {
				echo 'Локация';
			} else {
				echo 'Location';
			}
			?>
		</div>
		<a
			href="https://www.google.com/maps/place/AX+CAPITAL+Dubai/@25.1860442,55.2721418,17z/data=!3m2!4b1!5s0x3e5f682d1881711f:0x78f4680898c9a6d4!4m6!3m5!1s0x3e5f6950d805de93:0x48036ad72cb92588!8m2!3d25.1860442!4d55.2747167!16s%2Fg%2F11h236sfc6?entry=ttu"><img
				src="<?php echo get_template_directory_uri(); ?>/img/div.gm-style.jpg" alt="location" /></a>
	</div>
</footer>
<div class="bottom_copyright container">
	AX MOTORS ©2023
	<?php
	$current_language = pll_current_language();
	if ($current_language == 'en') {
		echo ' All Rights Reserved.';

	} elseif ($current_language == 'ru') {
		echo ' Все права защищены.';
	} else {
		echo ' All Rights Reserved.';
	}
	?>
	<div>
		<small>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy
				Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</small>
	</div>

</div>
</main>

</div>

<?php wp_footer(); ?>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "AutomotiveBusiness",
  "name": "AX MOTORS",
  "description": "AX MOTORS is a car dealing company providing luxury and
			  medium-segment vehicles",
  "address": {
	"@type": "PostalAddress",
	"streetAddress": "14th Floor, Westburry Office, Dubai",
	"addressLocality": "Dubai",
	"addressRegion": "Emirate of Dubai",
	"postalCode": "-",
	"addressCountry": "United Arab Emirates"
  },
  "telephone": "+971585893990",
  "email": "Vitalii@axmotors.ae",
  "url": "https://axmotors.ae",
  "logo": "https://axmotors.ae/wp-content/themes/ax-car-main/img/logo.svg",
}
</script>

</body>

</html>
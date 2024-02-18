<?php get_header(); ?>
<main>
  <section class="page_title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/Contact-us.webp)">
    <div class="page_title_block">
      <div class="page_title_text">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
          echo 'Contact us';

        } elseif ($current_language == 'ru') {
          echo 'Контакты';
        } else {
          echo 'Contact us';
        }
        ?>
      </div>
      <div class="breadcrums">
        <?php
        $current_language = pll_current_language();
        if ($current_language == 'en') {
          echo '<span><a href="/">Home</a></span>
              <span>Contact us</span>';

        } elseif ($current_language == 'ru') {
          echo '<span><a href="/ru/">Главная</a></span>
              <span>Контакты</span>';
        } else {
          echo '<span>Home</span>
              <span>Contact us</span>';
        }
        ?>
      </div>
    </div>
    <div class="background_overlay"></div>
  </section>

  <section class="contct_gallery container">
    <div class="section_title">
      <?php
      $current_language = pll_current_language();
      if ($current_language == 'en') {
        $cars_fleet = get_field('visit_our_office_en');
        echo $cars_fleet;

      } elseif ($current_language == 'ru') {
        $cars_fleet = get_field('visit_our_office_ru');
        echo $cars_fleet;
      } else {
        $cars_fleet = get_field('visit_our_office_en');
        echo $cars_fleet; // Вывод значения по умолчанию
      }
      ?>
    </div>
    <div class="section_subtitle">
      <?php
      $current_language = pll_current_language();
      if ($current_language == 'en') {
        $cars_fleet = get_field('innovative_en');
        echo $cars_fleet;

      } elseif ($current_language == 'ru') {
        $cars_fleet = get_field('innovative_ru');
        echo $cars_fleet;
      } else {
        $cars_fleet = get_field('innovative_en');
        echo $cars_fleet; // Вывод значения по умолчанию
      }
      ?>
    </div>

    <div class="gallery_block">
      <img src="<?php echo get_template_directory_uri(); ?>/img/No Active-min.jpg" alt="" />
      <img class="active_img" src="<?php echo get_template_directory_uri(); ?>/img/Rectangle 574135-min.jpg" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/No Activeuygmin.jpg" alt="" />
    </div>

    <a class="view_map_link"
      href="https://www.google.com/maps/place/AX+CAPITAL+Dubai/@25.1860442,55.2747167,17z/data=!3m2!4b1!5s0x3e5f682d1881711f:0x78f4680898c9a6d4!4m6!3m5!1s0x3e5f6950d805de93:0x48036ad72cb92588!8m2!3d25.1860442!4d55.2747167!16s%2Fg%2F11h236sfc6?entry=ttu">
      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="26" viewBox="0 0 29 26" fill="none">
        <path
          d="M6.80798 16.319C3.45477 17.1562 1.26953 18.5264 1.26953 20.0746C1.26953 22.6236 7.19314 24.69 14.5003 24.69C21.8074 24.69 27.731 22.6236 27.731 20.0746C27.731 18.5264 25.5458 17.1562 22.1926 16.319"
          stroke="white" stroke-width="1.32" />
        <mask id="path-2-inside-1_471_1754" fill="white">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M14.5009 22.2284C14.5009 22.2284 22.1932 12.6306 22.1932 8.38223C22.1932 4.1339 18.7492 0.689941 14.5009 0.689941C10.2526 0.689941 6.80859 4.1339 6.80859 8.38223C6.80859 12.6306 14.5009 22.2284 14.5009 22.2284ZM14.5 11.1899C15.8807 11.1899 17 10.0707 17 8.68994C17 7.30923 15.8807 6.18994 14.5 6.18994C13.1193 6.18994 12 7.30923 12 8.68994C12 10.0707 13.1193 11.1899 14.5 11.1899Z" />
        </mask>
        <path
          d="M14.5009 22.2284L13.4709 23.0539L14.5009 24.339L15.5309 23.0539L14.5009 22.2284ZM20.8732 8.38223C20.8732 9.1268 20.5109 10.2935 19.802 11.7651C19.1162 13.1891 18.1892 14.7331 17.2434 16.1742C16.3008 17.6107 15.3557 18.9206 14.645 19.8728C14.2901 20.3482 13.9948 20.7329 13.789 20.9978C13.6861 21.1303 13.6057 21.2327 13.5514 21.3014C13.5243 21.3358 13.5037 21.3617 13.4901 21.3788C13.4833 21.3873 13.4783 21.3936 13.475 21.3976C13.4734 21.3997 13.4723 21.4011 13.4716 21.402C13.4712 21.4024 13.471 21.4027 13.4709 21.4028C13.4708 21.4029 13.4708 21.4029 13.4708 21.403C13.4708 21.4029 13.4709 21.4028 14.5009 22.2284C15.5309 23.0539 15.531 23.0537 15.5312 23.0536C15.5312 23.0534 15.5314 23.0532 15.5316 23.053C15.5319 23.0526 15.5324 23.052 15.533 23.0513C15.5342 23.0498 15.5358 23.0478 15.5379 23.0451C15.5421 23.0399 15.5481 23.0324 15.5558 23.0226C15.5714 23.0031 15.594 22.9747 15.6231 22.9377C15.6815 22.8638 15.7663 22.7558 15.8738 22.6175C16.0887 22.3409 16.3943 21.9426 16.7606 21.4519C17.4923 20.4717 18.4702 19.1166 19.4506 17.6226C20.428 16.1333 21.4241 14.4813 22.1805 12.9108C22.914 11.388 23.5132 9.76184 23.5132 8.38223H20.8732ZM14.5009 2.00994C18.0202 2.00994 20.8732 4.86291 20.8732 8.38223H23.5132C23.5132 3.40488 19.4782 -0.630059 14.5009 -0.630059V2.00994ZM8.12859 8.38223C8.12859 4.86291 10.9816 2.00994 14.5009 2.00994V-0.630059C9.52354 -0.630059 5.48859 3.40488 5.48859 8.38223H8.12859ZM14.5009 22.2284C15.5309 21.4028 15.531 21.4029 15.531 21.403C15.531 21.4029 15.531 21.4029 15.5309 21.4028C15.5308 21.4027 15.5305 21.4024 15.5302 21.402C15.5295 21.4011 15.5283 21.3997 15.5267 21.3976C15.5235 21.3936 15.5185 21.3873 15.5117 21.3788C15.4981 21.3617 15.4775 21.3358 15.4504 21.3014C15.3961 21.2327 15.3156 21.1303 15.2127 20.9978C15.0069 20.7329 14.7117 20.3482 14.3568 19.8728C13.6461 18.9206 12.701 17.6107 11.7583 16.1742C10.8126 14.7331 9.88561 13.1891 9.19975 11.7651C8.4909 10.2935 8.12859 9.1268 8.12859 8.38223H5.48859C5.48859 9.76184 6.08782 11.388 6.82128 12.9108C7.57772 14.4813 8.57379 16.1333 9.55115 17.6226C10.5315 19.1166 11.5095 20.4717 12.2411 21.4519C12.6074 21.9426 12.9131 22.3409 13.128 22.6175C13.2354 22.7558 13.3202 22.8638 13.3786 22.9377C13.4078 22.9747 13.4304 23.0031 13.446 23.0226C13.4537 23.0324 13.4597 23.0399 13.4639 23.0451C13.466 23.0478 13.4676 23.0498 13.4688 23.0513C13.4694 23.052 13.4698 23.0526 13.4702 23.053C13.4704 23.0532 13.4705 23.0534 13.4706 23.0536C13.4708 23.0537 13.4709 23.0539 14.5009 22.2284ZM15.68 8.68994C15.68 9.34164 15.1517 9.86994 14.5 9.86994V12.5099C16.6097 12.5099 18.32 10.7997 18.32 8.68994H15.68ZM14.5 7.50994C15.1517 7.50994 15.68 8.03825 15.68 8.68994H18.32C18.32 6.58021 16.6097 4.86994 14.5 4.86994V7.50994ZM13.32 8.68994C13.32 8.03825 13.8483 7.50994 14.5 7.50994V4.86994C12.3903 4.86994 10.68 6.58021 10.68 8.68994H13.32ZM14.5 9.86994C13.8483 9.86994 13.32 9.34164 13.32 8.68994H10.68C10.68 10.7997 12.3903 12.5099 14.5 12.5099V9.86994Z"
          fill="white" mask="url(#path-2-inside-1_471_1754)" />
      </svg>
      <?php
      $current_language = pll_current_language();
      if ($current_language == 'en') {
        echo 'VIEW ON MAP';

      } elseif ($current_language == 'ru') {
        echo 'ОТКРЫТЬ НА КАРТЕ';
      } else {
        echo 'VIEW ON MAP';
      }
      ?>
    </a>
  </section>

  <section class="buy_a_car_form container">
    <div class="section_title">
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
    <div class="section_description">
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

      <form  class="get_consultation_form" method="POST" action="<?php
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
        <button class="button new" >
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
      <div class="contact_whatsapp">
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



  <?php get_footer() ?>
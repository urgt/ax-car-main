<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="/wp-content/themes/ax-car-main/style.css" />

    <title>AX MOTORS</title>
  </head>
  <body>
    <div class="wrapper">
      
      <main>
        <section
          class="page_title"
          style="background-image: url(img/Sectioniiui-min.jpeg)"
        >
          <div class="page_title_block">
            <div class="page_title_text">Contact us</div>
            <div class="breadcrums">
              <span>Home</span>
              <span>Contact us</span>
            </div>
          </div>
          <div class="background_overlay"></div>
        </section>

        <section class="contact_us_form_section container">
          
          <div class="contact_us_form_content">
            <div class="section_subtitle luxury">Contact</div>
            <div class="section_title">Have other questions?</div>
            <div class="section_description">
              Write us a message, and we will reach out shortly
            </div>
            <div class="contact_info">
              <div>
                <img src="img/ph_map-pin.svg" alt="location" />14th Floor,
                Westburry Office, Dubai
              </div>
              <div>
                <img
                  src="img/oi_envelope-closed.svg"
                  alt="vitalii@axmotors.ae"
                />Vitalii@axmotors.ae
              </div>
              <div>
                <img
                  src="img/ph_phone-light.svg"
                  alt="+971585893990"
                />+971585893990
              </div>
              <div><img src="img/ph_clock.svg" alt="24/7" />124/7</div>
            </div>
          </div>
        </section>

      </main>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="/script.js"></script>
  </body>
</html>

<?php
$fio = $_POST['name'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("vitalii@axmotors.ae", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: Vitalii@axmotors.ae \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
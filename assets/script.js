require("fslightbox");

var onloadCallback = function () {
  grecaptcha.render("form-captcha", {
    sitekey: "6LcTFGQpAAAAAK85QJgi7K0HqqFPEmssoY5a39Aq",
  });
};

jQuery(document).ready(function ($) {
  
  // Определяем функцию toggleMenu
  function toggleMenu() {
    const headerNav = document.querySelector(".header_nav");
    const nav = document.querySelector(".nav");

    if (!headerNav.classList.contains("active")) {
      headerNav.classList.add("active");
      nav.classList.add("active");
    } else {
      headerNav.classList.remove("active");
      nav.classList.remove("active");
    }
  }

  // Добавляем Event Listener для клика по элементу
  const labelElement = document.querySelector("#toggle_menu_click"); // Замените селектор на нужный вам

  if (labelElement) {
    labelElement.addEventListener("click", toggleMenu);
  }
});

jQuery(document).ready(function ($) {
  const $container = $(".car_details_sidebar_gallery_imgs");
  if ($container != null) {
    const imagesToShow = 4;
    const $images = $container.find("a");
    const $hiddenImages = $images.slice(imagesToShow);

    if ($images.length > imagesToShow) {
      $hiddenImages.hide();
      $("#hide-img-btn").hide();

      $("#load-more-img").on("click", () => {
        $hiddenImages.show();
        $("#load-more-img").hide();
        $("#hide-img-btn").show();
      });

      $("#hide-img-btn").on("click", () => {
        $hiddenImages.hide();
        $("#load-more-img").show();
        $("#hide-img-btn").hide();
      });
    } else {
      $("#load-more-img, #hide-img-btn").hide();
    }
  }
});

if (jQuery("#language-selected").is(":empty")) {
  jQuery(".menu li").each(function () {
    if (jQuery(this).attr("class") == "selected") {
      var selected = jQuery(this).find(".lang-code").html().toUpperCase();
      console.log(jQuery(this).find(".lang-code").html().toUpperCase());
      jQuery("#language-selected").html(selected);
    }
  });
}

//The next following line displays and set selected language
jQuery(".dropdownbox").click(function () {
  jQuery(".menu").toggleClass("showMenu");
  jQuery(".menu > li").click(function () {
    var selected = jQuery(this).find(".lang-code").html().toUpperCase();
    console.log(jQuery(this).find(".lang-code").html().toUpperCase());
    jQuery("#language-selected").html(selected);
    jQuery(".menu").removeClass("showMenu");
  });
});

//Close language select box if nothing is selected
jQuery("#dropdown-wrapper").mouseleave(function () {
  jQuery(".menu").removeClass("showMenu");
});

var swiper = new Swiper(".mySwiper1", {
  spaceBetween: 30,

  autoplay: {
    delay: 2000,
  },
  loop: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

const button = document.querySelector(".all_filters");

if (button) {
  button.addEventListener("click", buttonClick, false);
}

function buttonClick(event) {
  event.preventDefault();
}
// car details swiper

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});

jQuery(document).ready(function (jQuery) {
  jQuery(".accordionjs").accordionjs({
    closeAble: true,

    // Close other sections.(data-close-other)
    closeOther: true,

    activeIndex: false,
  });
});

/* Слайдер на главной */

const swiper3 = new Swiper(".sample-slider", {
  loop: true,
  loopedSlides: "auto", // добавлено
  pauseOnMouseEnter: true,
  grabCursor: true,
  autoplay: {
    delay: 0,
    pauseOnMouseEnter: true,
    disableOnInteraction: false,
  },
  speed: 5000,
  slidesPerView: 2, // значение для мобильных устройств
  breakpoints: {
    768: {
      slidesPerView: 7, // значение для десктопа
    },
  },
});

function handleScrolling(elemId) {
  const elem = document.getElementById(elemId);
  
  if(elem && elem.scrollLeft == 0){
    elem.classList.remove("pause-scroll");
  }

  function scrollRight() {
    if (!elem.classList.contains("pause-scroll")) {
      elem.scrollLeft += 1;
      if (elem.scrollLeft >= elem.scrollWidth - elem.clientWidth) {
        resetScroll(elem);
        
      }
    }
  }

  function resetScroll(elem) {
    
    elem.scrollLeft = 0;
    elem.addEventListener("transitionend", () => {
      elem.classList.remove("pause-scroll");
    });
    elem.classList.add("pause-scroll");
  }
  
  if (elem) {
    elem.addEventListener("mouseover", handleMouseOverOut);
    elem.addEventListener("mouseout", handleMouseOverOut);
    elem.addEventListener("touchstart", handleTouchStartMoveEnd);
    elem.addEventListener("touchmove", handleTouchStartMoveEnd);
    elem.addEventListener("touchend", handleTouchEnd);

    setInterval(scrollRight, 50);
  }

  function handleMouseOverOut() {
    if (!isTouchDevice()) {
      elem.classList.toggle("pause-scroll");
    }
  }

  function handleTouchStartMoveEnd() {
    if (!elem.classList.contains("pause-scroll")) {
      elem.classList.add("pause-scroll");
      elem.style.scrollBehavior = "auto";
    }
  }

  function handleTouchEnd() {
    if (elem.classList.contains("pause-scroll")) {
      elem.style.scrollBehavior = "smooth";
      window.setTimeout(() => {
        elem.classList.remove("pause-scroll");
      }, 3000);
    }
  }
}

handleScrolling("brands");
handleScrolling("classes");

jQuery(document).ready(function (jQuery) {
  function handleDragScroll(elemSelector) {
    var addsWrap = jQuery(elemSelector);
    var isDragging = false;
    var startX;
    var scrollLeft;

    addsWrap.on("mousedown", function (e) {
      if (!jQuery(e.target).closest(addsWrap).length) return;
      e.preventDefault();
      isDragging = true;
      startX = e.pageX;
      scrollLeft = addsWrap.scrollLeft();
      addsWrap.css("scroll-behavior", "initial");
    });

    jQuery(document).on("mouseup", function () {
      isDragging = false;
      addsWrap.css("scroll-behavior", "");
    });

    addsWrap.on("mousemove", function (e) {
      if (!isDragging) return;
      e.preventDefault();
      var diffX = e.pageX - startX;
      addsWrap.scrollLeft(scrollLeft - diffX);
    });
  }

  handleDragScroll("#brands");
  handleDragScroll("#classes");
});

function isTouchDevice() {
  return "ontouchstart" in window || navigator.msMaxTouchPoints;
}

/* TABBER */

const tabs = document.querySelectorAll(".tab");
if (tabs.length) {
  const contentItems = document.querySelectorAll(".content-tab");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      removeActiveClasses();
      tab.classList.add("active");
      contentItems[index].classList.add("active");
    });
  });

  function removeActiveClasses() {
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });

    contentItems.forEach((content) => {
      content.classList.remove("active");
    });
  }

  tabs[0].classList.add("active");
  contentItems[0].classList.add("active");
}

/* REVIEWS */

const swiper4 = new Swiper(".review-swiper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-next",
    prevEl: ".swiper-prev",
  },
  grabCursor: true,
  speed: 1000,
  slidesPerView: 1, // значение для мобильных устройств
  breakpoints: {
    768: {
      slidesPerView: 2, // значение для десктопа
    },
  },
});

// // Получите элементы кнопок по классам
// const prevButton = document.querySelector(".swiper-prev");
// const nextButton = document.querySelector(".swiper-next");

// // Добавьте обработчики событий на клик для кнопок
// if (prevButton || nextButton) {
//   prevButton.addEventListener("click", function () {
//     swiper4.slidePrev();
//   });

//   nextButton.addEventListener("click", function () {
//     swiper4.slideNext();
//   });
// }

document.addEventListener("DOMContentLoaded", () => {
  const textContainers = document.querySelectorAll(".buy_car_title");
  if (textContainers) {
    textContainers.forEach((textContainer) => {
      const textSpan = textContainer.querySelector("span");

      textContainer.addEventListener("mouseenter", () => {
        if (textSpan.offsetWidth + 5 > textContainer.offsetWidth) {
          const translateXValue = `calc(-jQuery{
            textSpan.offsetWidth - textContainer.offsetWidth
          }px)`;

          textSpan.style.transition = "transform 1s linear";
          textSpan.style.transform = `translateX(jQuery{translateXValue})`;
          textContainer.classList.add("no-after");
        }
      });

      textContainer.addEventListener("mouseleave", () => {
        textSpan.style.transition = "transform 1s linear";
        textSpan.style.transform = "translateX(0)";
        textContainer.classList.remove("no-after");
      });
    });
  }
});

// =================

// Common function to handle mouse click and drag prevention
function handleCarouselClick(e) {
  const startX = e.pageX;
  const startY = e.pageY;

  const preventClick = (clickEvent) => {
    const currentX = clickEvent.pageX;
    const currentY = clickEvent.pageY;
    const distance = Math.sqrt(
      Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2)
    );

    if (distance > 5) {
      clickEvent.preventDefault();
      clickEvent.stopPropagation();
    }
  };

  return preventClick;
}

const carousel = document.querySelector(".logos_section.brands");

if (carousel != null) {
  let startX = 0;
  let startY = 0;

  carousel.addEventListener("mousedown", (e) => {
    startX = e.pageX;
    startY = e.pageY;
  });

  carousel.addEventListener("click", handleCarouselClick);
}

document.addEventListener("DOMContentLoaded", () => {
  let startX = 0;
  let startY = 0;

  const classesCarousel = document.querySelector(".logos_section.classes");

  if (classesCarousel) {
    classesCarousel.addEventListener("mousedown", (e) => {
      startX = e.pageX;
      startY = e.pageY;
    });

    classesCarousel.addEventListener("click", (e) => {
      const targetElement = e.target;
      if (
        targetElement.tagName === "A" &&
        targetElement.parentElement.tagName === "DIV"
      ) {
        const currentX = e.pageX;
        const currentY = e.pageY;
        const distance = Math.sqrt(
          Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2)
        );

        if (distance > 5) {
          e.preventDefault();
          e.stopPropagation();
        }
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const whatsappContact = document.querySelector(".contact_whatsapp");

  if (whatsappContact) {
    whatsappContact.innerHTML = whatsappContact.innerHTML.replace(
      /&nbsp;/g,
      ""
    );
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const labelToggle = document.querySelector(".menu_toggle label");

  labelToggle.addEventListener("click", () => {
    const menuToggle = document.querySelector(".menu_toggle");
    menuToggle.classList.toggle("active");
  });
});

jQuery(document).ready(function () {
  jQuery("#sell_brand").select2({
    placeholder: "Select a brand",
  });
});

document.addEventListener("DOMContentLoaded", () => {
  let startX = 0;
  let startY = 0;

  const carousel = document.querySelector(".logos_section.brands");

  if (carousel != null) {
    carousel.addEventListener("mousedown", (e) => {
      startX = e.pageX;
      startY = e.pageY;
    });

    carousel.addEventListener("click", (e) => {
      const currentX = e.pageX;
      const currentY = e.pageY;
      const distance = Math.sqrt(
        Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2)
      );

      if (distance > 5) {
        e.preventDefault();
        e.stopPropagation();
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  let startX = 0;
  let startY = 0;

  const classesCarousel = document.querySelector(".logos_section.classes");

  if (classesCarousel != null) {
    classesCarousel.addEventListener("mousedown", (e) => {
      startX = e.pageX;
      startY = e.pageY;
    });

    classesCarousel.addEventListener("click", (e) => {
      const targetElement = e.target;
      if (
        targetElement.tagName === "A" &&
        targetElement.parentElement.tagName === "DIV"
      ) {
        const currentX = e.pageX;
        const currentY = e.pageY;
        const distance = Math.sqrt(
          Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2)
        );

        if (distance > 5) {
          e.preventDefault();
          e.stopPropagation();
        }
      }
    });
  }
});

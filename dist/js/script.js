/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/script.js":
/*!**************************!*\
  !*** ./assets/script.js ***!
  \**************************/
/***/ (() => {

var onloadCallback = function onloadCallback() {
  grecaptcha.render('form-captcha', {
    'sitekey': '6LcTFGQpAAAAAK85QJgi7K0HqqFPEmssoY5a39Aq'
  });
};
function toggleMenu() {
  if (!document.querySelector(".header_nav").classList.contains("active")) {
    document.querySelector(".header_nav").classList.add("active");
    document.querySelector(".nav").classList.add("active");
  } else {
    document.querySelector(".header_nav").classList.remove("active");
    document.querySelector(".nav").classList.remove("active");
  }
}
jQuery(document).ready(function ($) {
  var $container = $('.car_details_sidebar_gallery_imgs');
  if ($container != null) {
    var imagesToShow = 4;
    var $images = $container.find('a');
    var $hiddenImages = $images.slice(imagesToShow);
    if ($images.length > imagesToShow) {
      $hiddenImages.hide();
      $('#hide-img-btn').hide();
      $('#load-more-img').on('click', function () {
        $hiddenImages.show();
        $('#load-more-img').hide();
        $('#hide-img-btn').show();
      });
      $('#hide-img-btn').on('click', function () {
        $hiddenImages.hide();
        $('#load-more-img').show();
        $('#hide-img-btn').hide();
      });
    } else {
      $('#load-more-img, #hide-img-btn').hide();
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
    delay: 2000
  },
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});
var button = document.querySelector(".all_filters");
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
  watchSlidesProgress: true
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  thumbs: {
    swiper: swiper
  }
});
jQuery(document).ready(function (jQuery) {
  jQuery(".accordionjs").accordionjs({
    closeAble: true,
    // Close other sections.(data-close-other)
    closeOther: true,
    activeIndex: false
  });
});

/* Слайдер на главной */

var swiper3 = new Swiper(".sample-slider", {
  loop: true,
  loopedSlides: "auto",
  // добавлено
  pauseOnMouseEnter: true,
  grabCursor: true,
  autoplay: {
    delay: 0,
    pauseOnMouseEnter: true,
    disableOnInteraction: false
  },
  speed: 5000,
  slidesPerView: 2,
  // значение для мобильных устройств
  breakpoints: {
    768: {
      slidesPerView: 7 // значение для десктопа
    }
  }
});

/* Brands scrolling */

function scrollRight() {
  var elem = document.getElementById("brands");
  if (!elem.classList.contains("pause-scroll")) {
    elem.scrollLeft += 1;
    if (elem.scrollLeft >= elem.scrollWidth - elem.clientWidth) {
      elem.scrollLeft = 0;
      elem.addEventListener("transitionend", function () {
        elem.classList.remove("pause-scroll");
      });
      elem.classList.add("pause-scroll");
    }
  }
}
var elem = document.getElementById("brands");
if (elem) {
  var _isTouchDevice = function _isTouchDevice() {
    return "ontouchstart" in window || navigator.msMaxTouchPoints;
  };
  elem.addEventListener("mouseover", function () {
    if (!_isTouchDevice()) {
      elem.classList.add("pause-scroll");
    }
  });
  elem.addEventListener("mouseout", function () {
    if (!_isTouchDevice()) {
      elem.classList.remove("pause-scroll");
    }
  });
  elem.addEventListener("touchstart", function () {
    if (!elem.classList.contains("pause-scroll")) {
      elem.classList.add("pause-scroll");
      elem.style.scrollBehavior = "auto";
    }
  });
  elem.addEventListener("touchmove", function () {
    if (!elem.classList.contains("pause-scroll")) {
      elem.classList.add("pause-scroll");
      elem.style.scrollBehavior = "auto";
    }
  });
  elem.addEventListener("touchend", function () {
    if (elem.classList.contains("pause-scroll")) {
      elem.style.scrollBehavior = "smooth";
      window.setTimeout(function () {
        elem.classList.remove("pause-scroll");
      }, 250);
    }
  });
  setInterval(scrollRight, 50);
}
jQuery(document).ready(function (jQuery) {
  var addsWrap = jQuery("#brands");
  var isDragging = false;
  var startX;
  var scrollLeft;
  addsWrap.on("mousedown", function (e) {
    // Проверяем, что нажатие произошло на элементе addsWrap
    if (!jQuery(e.target).closest(addsWrap).length) return;

    // Предотвращаем переход по ссылке при начале драга
    e.preventDefault();
    isDragging = true;
    startX = e.pageX;
    scrollLeft = addsWrap.scrollLeft();
    addsWrap.css("scroll-behavior", "initial"); // Отключаем плавность прокрутки
  });
  jQuery(document).on("mouseup", function () {
    isDragging = false;
    addsWrap.css("scroll-behavior", ""); // Восстанавливаем плавность прокрутки
  });
  addsWrap.on("mousemove", function (e) {
    if (!isDragging) return;
    e.preventDefault(); // Отменяем выделение элементов

    var diffX = e.pageX - startX;
    addsWrap.scrollLeft(scrollLeft - diffX);
  });
});

/* CLASSES SCROLLING */

function scrollRightForClasses() {
  var elem = document.getElementById("classes");
  if (!elem.classList.contains("pause-scroll")) {
    elem.scrollLeft += 1;
    if (elem.scrollLeft >= elem.scrollWidth - elem.clientWidth) {
      elem.scrollLeft = 0;
      elem.addEventListener("transitionend", function () {
        elem.classList.remove("pause-scroll");
      });
      elem.classList.add("pause-scroll");
    }
  }
}
var elemClasses = document.getElementById("classes");
if (elemClasses) {
  elemClasses.addEventListener("mouseover", function () {
    if (!isTouchDevice()) {
      elemClasses.classList.add("pause-scroll");
    }
  });
  elemClasses.addEventListener("mouseout", function () {
    if (!isTouchDevice()) {
      elemClasses.classList.remove("pause-scroll");
    }
  });
  elemClasses.addEventListener("touchstart", function () {
    if (!elemClasses.classList.contains("pause-scroll")) {
      elemClasses.classList.add("pause-scroll");
      elemClasses.style.scrollBehavior = "auto";
    }
  });
  elemClasses.addEventListener("touchmove", function () {
    if (!elemClasses.classList.contains("pause-scroll")) {
      elemClasses.classList.add("pause-scroll");
      elemClasses.style.scrollBehavior = "auto";
    }
  });
  elemClasses.addEventListener("touchend", function () {
    if (elemClasses.classList.contains("pause-scroll")) {
      elemClasses.style.scrollBehavior = "smooth";
      window.setTimeout(function () {
        elemClasses.classList.remove("pause-scroll");
      }, 250);
    }
  });
  setInterval(scrollRightForClasses, 50);
} else {
  console.log("Элемент classes не найден на странице");
}
jQuery(document).ready(function (jQuery) {
  var addsWrapClasses = jQuery("#classes");
  var isDraggingClasses = false;
  var startXClasses;
  var scrollLeftClasses;
  addsWrapClasses.on("mousedown", function (e) {
    if (!jQuery(e.target).closest(addsWrapClasses).length) return;
    e.preventDefault();
    isDraggingClasses = true;
    startXClasses = e.pageX;
    scrollLeftClasses = addsWrapClasses.scrollLeft();
    addsWrapClasses.css("scroll-behavior", "initial");
  });
  jQuery(document).on("mouseup", function () {
    isDraggingClasses = false;
    addsWrapClasses.css("scroll-behavior", "");
  });
  addsWrapClasses.on("mousemove", function (e) {
    if (!isDraggingClasses) return;
    e.preventDefault();
    var diffXClasses = e.pageX - startXClasses;
    addsWrapClasses.scrollLeft(scrollLeftClasses - diffXClasses);
  });
});
function isTouchDevice() {
  return "ontouchstart" in window || navigator.msMaxTouchPoints;
}

/* TABBER */

var tabs = document.querySelectorAll(".tab");
if (tabs.length) {
  var removeActiveClasses = function removeActiveClasses() {
    tabs.forEach(function (tab) {
      tab.classList.remove("active");
    });
    contentItems.forEach(function (content) {
      content.classList.remove("active");
    });
  };
  var contentItems = document.querySelectorAll(".content-tab");
  tabs.forEach(function (tab, index) {
    tab.addEventListener("click", function () {
      removeActiveClasses();
      tab.classList.add("active");
      contentItems[index].classList.add("active");
    });
  });
  tabs[0].classList.add("active");
  contentItems[0].classList.add("active");
}

/* REVIEWS */

var swiper4 = new Swiper(".review-swiper", {
  loop: true,
  loopedSlides: "auto",
  // добавлено
  pauseOnMouseEnter: true,
  grabCursor: true,
  autoplay: false,
  speed: 1000,
  slidesPerView: 1,
  // значение для мобильных устройств
  breakpoints: {
    768: {
      slidesPerView: 2 // значение для десктопа
    }
  }
});

// Получите элементы кнопок по классам
var prevButton = document.querySelector(".swiper-prev");
var nextButton = document.querySelector(".swiper-next");

// Добавьте обработчики событий на клик для кнопок
if (prevButton || nextButton) {
  prevButton.addEventListener("click", function () {
    swiper4.slidePrev();
  });
  nextButton.addEventListener("click", function () {
    swiper4.slideNext();
  });
}
document.addEventListener("DOMContentLoaded", function () {
  var textContainers = document.querySelectorAll(".buy_car_title");
  if (textContainers) {
    textContainers.forEach(function (textContainer) {
      var textSpan = textContainer.querySelector("span");
      textContainer.addEventListener("mouseenter", function () {
        if (textSpan.offsetWidth + 5 > textContainer.offsetWidth) {
          var translateXValue = "calc(-jQuery{\n            textSpan.offsetWidth - textContainer.offsetWidth\n          }px)";
          textSpan.style.transition = "transform 1s linear";
          textSpan.style.transform = "translateX(jQuery{translateXValue})";
          textContainer.classList.add("no-after");
        }
      });
      textContainer.addEventListener("mouseleave", function () {
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
  var startX = e.pageX;
  var startY = e.pageY;
  var preventClick = function preventClick(clickEvent) {
    var currentX = clickEvent.pageX;
    var currentY = clickEvent.pageY;
    var distance = Math.sqrt(Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2));
    if (distance > 5) {
      clickEvent.preventDefault();
      clickEvent.stopPropagation();
    }
  };
  return preventClick;
}
var carousel = document.querySelector(".logos_section.brands");
if (carousel != null) {
  var startX = 0;
  var startY = 0;
  carousel.addEventListener("mousedown", function (e) {
    startX = e.pageX;
    startY = e.pageY;
  });
  carousel.addEventListener("click", handleCarouselClick);
}
document.addEventListener("DOMContentLoaded", function () {
  var startX = 0;
  var startY = 0;
  var classesCarousel = document.querySelector(".logos_section.classes");
  if (classesCarousel) {
    classesCarousel.addEventListener("mousedown", function (e) {
      startX = e.pageX;
      startY = e.pageY;
    });
    classesCarousel.addEventListener("click", function (e) {
      var targetElement = e.target;
      if (targetElement.tagName === "A" && targetElement.parentElement.tagName === "DIV") {
        var currentX = e.pageX;
        var currentY = e.pageY;
        var distance = Math.sqrt(Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2));
        if (distance > 5) {
          e.preventDefault();
          e.stopPropagation();
        }
      }
    });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var whatsappContact = document.querySelector(".contact_whatsapp");
  if (whatsappContact) {
    whatsappContact.innerHTML = whatsappContact.innerHTML.replace(/&nbsp;/g, "");
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var labelToggle = document.querySelector(".menu_toggle label");
  labelToggle.addEventListener("click", function () {
    var menuToggle = document.querySelector(".menu_toggle");
    menuToggle.classList.toggle("active");
  });
});
jQuery(document).ready(function () {
  jQuery("#sell_brand").select2({
    placeholder: "Select a brand"
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var startX = 0;
  var startY = 0;
  var carousel = document.querySelector(".logos_section.brands");
  if (carousel != null) {
    carousel.addEventListener("mousedown", function (e) {
      startX = e.pageX;
      startY = e.pageY;
    });
    carousel.addEventListener("click", function (e) {
      var currentX = e.pageX;
      var currentY = e.pageY;
      var distance = Math.sqrt(Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2));
      if (distance > 5) {
        e.preventDefault();
        e.stopPropagation();
      }
    });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var startX = 0;
  var startY = 0;
  var classesCarousel = document.querySelector(".logos_section.classes");
  if (classesCarousel != null) {
    classesCarousel.addEventListener("mousedown", function (e) {
      startX = e.pageX;
      startY = e.pageY;
    });
    classesCarousel.addEventListener("click", function (e) {
      var targetElement = e.target;
      if (targetElement.tagName === "A" && targetElement.parentElement.tagName === "DIV") {
        var currentX = e.pageX;
        var currentY = e.pageY;
        var distance = Math.sqrt(Math.pow(currentX - startX, 2) + Math.pow(currentY - startY, 2));
        if (distance > 5) {
          e.preventDefault();
          e.stopPropagation();
        }
      }
    });
  }
});

/***/ }),

/***/ "./style.css":
/*!*******************!*\
  !*** ./style.css ***!
  \*******************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/script": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkax_car_main_master"] = self["webpackChunkax_car_main_master"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./assets/script.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;